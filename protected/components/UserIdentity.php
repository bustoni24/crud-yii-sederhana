<?php

date_default_timezone_set("Asia/Jakarta");

class UserIdentity extends CUserIdentity {
    private $_id; //set id untuk unique identifier
    public $role;
    public $arPermission = array('');	

    public function authenticate() {
        $user = $this->username;
        $pass = $this->password;
        $this->setState('sesprodi', '');

        $login = User::model()->find('userUsername=:username AND userPassword=:password', array(':username' => $user, ':password' => md5($pass)));

        if ($login != null) {
            $this->_id = $user;
            $this->setState('username', $user);
            $this->setState('role', $login->userRole);

            if ($login->userRole != null) {
                $role = $login->userRole;
                $permissions = Permission::model()->findAllBySql("SELECT permission_name
	            		from role_permission rp
	            		left join permission p on rp.permission_id = p.permission_id
	            		where role_id=" . $role); //('role_id=:role_id',array(':role_id'=>$user_role));

                foreach ($permissions as $perm) {
                    array_push($this->arPermission, $perm->permission_name);
                }
            }

            //             print_r($this->arPermission); exit;
            $this->setState('permission', $this->arPermission);

            $this->errorCode = self::ERROR_NONE;

            return !$this->errorCode;
        } else {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
            return !$this->errorCode;
        }
    }

    public function getId() {
        return $this->_id;
    }

}
