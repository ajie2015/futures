<?php
namespace Admin\Controller;
use Think\Controller;
class DataController extends Controller {
    public function index(){
    	set_time_limit(0);
    	ini_set( 'memory_limit', '-1' );
    	$url = "Public/Upload/2013prices8.xls";
    exit;
    	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		$this->readExcel( $url );
    }
    public function readExcel( $url ){
    	$model_type = M('type');
    	$model_contract = M('contract');
    	$model_data = M('data');
    	Vendor('PHPExcel.PHPExcel');
		$objPHPExcel = new \PHPExcel(); 
        $objPHPExcel = \PHPExcel_IOFactory::load($url);
        //$sheetData = $objPHPExcel -> getActiveSheet() -> toArray(null, true, true, true);
        $sheetData = $objPHPExcel -> getActiveSheet() -> toArray();
        //var_dump($sheetData);
        $code = '';
        foreach ( $sheetData as $key => $value ){
        	if($key<3){
        		//continue;
        	}

        	if( $value[0] ){
        		$contract = $value[0];
        		if( $code != substr( $contract, 0, -4 ) ){
        			$code = substr( $contract, 0, -4 );
        			$data_type = array( 'code'=>$code );
    				$result_type = $model_type->add( $data_type );
        		}
        		$data_contract = array( 'name'=>$contract, 'code'=>$contract, 'type_id'=>$result_type );
				$result_contract = $model_contract->add( $data_contract );
        	}


        	//$data[$contract][] = $value;
        	$data = array(
        		'contract_id' => $result_contract,
        		'date' => $value[1],
        		'close_before' => $value[2],
        		'settle_before' => $value[3],
        		'open' => $value[4],
        		'close' => $value[7],
        		'high' => $value[5],
        		'low' => $value[6],
        		'settle' => $value[8],
        		//'rise' => $value[1],
        		//'rise_rate' => $value[1],
        		//'amplitude' => $value[1],
        		'volume' => $value[11],
        		'turnover' => $value[12],
        		'hold' => $value[13],
        	);
			$result_data = $model_data->add( $data );
        }
        //var_dump($data);
		//exit;
		//$data[$contract] = array();

    }
}