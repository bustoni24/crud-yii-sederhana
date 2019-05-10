<?php

class FrontController extends Controller
{
	public function actionIndex()
	{
                            $settings = Settings::model()->findByPk(1);
                            if($settings != null){
                                $this->render('view', array('data'=>$settings));
                            }else{
                                echo "Configuration Error";
                            }
		
	}

	public function actionMap()
	{
                        $lpju = DataLampu::model()->findAll();        
                        $this->render('map', array('data'=>$lpju));
	}
        
                public function actionKecamatan()
	{
                        $model = new Kecamatan('search');
                        $settings = Settings::model()->findByPk(1);
                        $model->unsetAttributes();  // clear any default values
                        if (isset($_GET['Kecamatan']))
                            $model->attributes = $_GET['Kecamatan'];

                        $this->render('adminKec', array(
                            'model' => $model,
                            'data'=>$settings
                        ));
	}
        
        public function actionDataLpju()
	{
                        $model = new DataLampu('search');
                        $settings = Settings::model()->findByPk(1);
                        $model->unsetAttributes();  // clear any default values
                        if (isset($_GET['DataLampu']))
                            $model->attributes = $_GET['DataLampu'];

                        $this->render('adminLpju', array(
                            'model' => $model,
                            'data'=>$settings
                        ));
	}

	public function actionData()
	{
                        $lpjus = array(
                            array("idcabang"=>1, "nama_cabang"=>"lpju 1", "x"=>"-7.618955", "y"=>"110.488130"),
                            array("idcabang"=>"2", "nama_cabang"=>"lpju 2", "x"=>"-7.607606153568098", "y"=>"110.40995866137694"),
                            array("idcabang"=>"3", "nama_cabang"=>"lpju 3", "x"=>"-7.6005338635555304", "y"=>"110.41691094714354"),
                            
                            );
                        $output = array("lpju"=>array("cabang"=>$lpjus));
                        echo json_encode($output);
                        
//		echo "{"lpju": {"cabang":[ {"idcabang":"1",
//		"nama_cabang":"lpju cicendo",
//		"x":"-7.618955",
//		"y":"110.488130"
//	},{"idcabang":"2", "nama_cabang":"lpju pasirkaliki", "x":"-7.607606153568098", "y":"110.40995866137694"},{"idcabang":"3",
//		"nama_cabang":"lpju ledeng",
//		"x":"-7.660569182496338",
//		"y":"110.40566712695311"
//	},{"idcabang":"5",
//		"nama_cabang":"lpju tamansari",
//		"x":"-7.6005338635555304",
//		"y":"110.41691094714354"
//	},{"idcabang":"6",
//		"nama_cabang":"lpju pasteur",
//		"x":"-7.6905643114795",
//		"y":"110.40755540209959"
//	},{"idcabang":"7",
//		"nama_cabang":"lpju sukajadi",
//		"x":"-7.692609364903361",
//		"y":"110.4969123967285"
//	},{"idcabang":"8",
//		"nama_cabang":"lpju ciwaruga",
//		"x":"-7.656819658358125",
//		"y":"110.48815766650389"
//	},{"idcabang":"9",
//		"nama_cabang":"lpju antapani",
//		"x":"-7.622943286468627",
//		"y":"110.46677857714842"
//	},{"idcabang":"10",
//		"nama_cabang":"lpju margasenang",
//		"x":"-7.658557592635749",
//		"y":"110.46162873583983"
//	},{"idcabang":"11",
//		"nama_cabang":"lpju kiaracondong",
//		"x":"-7.627203512746136",
//		"y":"110.45304566699217"
//	},{"idcabang":"12",
//		"nama_cabang":"wareteg cipedes",
//		"x":"-7.686644601096493",
//		"y":"110.40137559252928"
//	},{"idcabang":"13",
//		"nama_cabang":"lpju dago",
//		"x":"-7.6764191172621585",
//		"y":"110.42369157153319"
//	},{"idcabang":"14",
//		"nama_cabang":"lpju gegerkalong",
//		"x":"-7.670624578709752",
//		"y":"110.40120393115233"
//	},{"idcabang":"15",
//		"nama_cabang":"lpju sumur bandung",
//		"x":"-7.613059413418026",
//		"y":"110.42763978320311"
//	},{"idcabang":"16",
//		"nama_cabang":"lpju cijerah",
//		"x":"-7.61800137580266",
//		"y":"110.4775146611328"
//	},{"idcabang":"17",
//		"nama_cabang":"lpju sariwangi",
//		"x":"-7.63517410179417",
//		"y":"110.48026124316405"
//	},{"idcabang":"18",
//		"nama_cabang":"lpju sadangserang",
//		"x":"-7.691075575662541",
//		"y":"110.43193131762694"
//	},{"idcabang":"19",
//		"nama_cabang":"lpju ciroyom",
//		"x":"-7.614252305623478",
//		"y":"110.49777070361326"
//	},{"idcabang":"20",
//		"nama_cabang":"lpju cibadak",
//		"x":"-7.62140959559193",
//		"y":"110.40549546557615"
//	},{"idcabang":"21",
//		"nama_cabang":"lpju sukaraja",
//		"x":"-7.6946544095035875",
//		"y":"110.48249284106444"
//	},{"idcabang":"22",
//		"nama_cabang":"lpju sukawarna",
//		"x":"-7.686815023960637",
//		"y":"110.48558274584959"
//	},{"idcabang":"23",
//		"nama_cabang":"lpju braga",
//		"x":"-7.618810830230383",
//		"y":"110.41824132281492"
//	},{"idcabang":"24",
//		"nama_cabang":"lpju pasar baru",
//		"x":"-7.619023844322851",
//		"y":"110.40463715869139"
//	},{"idcabang":"25",
//		"nama_cabang":"lpju pamoyanan",
//		"x":"-7.602664082514163",
//		"y":"110.40339261370848"
//	},{"idcabang":"26",
//		"nama_cabang":"lpju arjuna",
//		"x":"-7.6092677003415055",
//		"y":"110.40231973010252"
//	},{"idcabang":"27",
//		"nama_cabang":"lpju unpar",
//		"x":"-7.613016810069283",
//		"y":"110.41133195239256"
//	}]}}
//';
	}
	


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        
         public  function getJenisLampu($id){
                $refLampu = JenisLampu::model()->find('ref_lampu_id = :id', array(':id'=>$id));
                if($refLampu != null){
                     return $refLampu->jenis_lampu;
                }
                
                return "";
        }
        
         public  function getKecamatan($id){
                $kecamatan = Kecamatan::model()->find('kecamatan_id = :id', array(':id'=>$id));
                if($kecamatan != null){
                     return $kecamatan->kecamatan_nama;
                }
                
                return "";
        }
        
        public  function getDesa($id){
                $desa = Desa::model()->find('desa_id = :id', array(':id'=>$id));
                if($desa != null){
                     return $desa->desa_nama;
                }
                
                return "";
        }
}
