<?php

namespace App\Http\Controllers;

use App\Loja;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class LojaController extends Controller{
    
	public function getNovo(){
	
		return view("loja.novo");

	}
	
	
	public function postNovo(Requests\LojaRequest $request){
	
		try {
	
			Loja::updateOrcreate([ "ID"=>($request->exists("ID"))? $request->get("ID") : -1], $request->except("_token"));
			
			if($request->exists("ID")){
				$msg = "Loja Alterada com sucesso!";
			}else{
				$msg = "Loja incluida com sucesso!";
			}
			
			return Redirect::back()->with("success",$msg);
		} catch (Exception $e) {
			
			return Redirect::back()->withErros(["Não foi possível adicionar uma nova loja."]);
		
		}
		
	
	}
	
	public function getListar(){
		$lojas =  Loja::all();
		return view("loja.listar", compact("lojas"));
	}
	
	
	public function getListarUser(){
		$lojas =  Loja::all();
		$hora = date('H:i', time());
		
		
		//echo $hora."'select * from lojas Where HoraAbre>='.$hora.' and HoraFecha<=".$hora;
		//$lojas = DB::select('select * from loja where id = :id', ['id' => 1]);
		//$lojas = DB::select("select * from lojas Where DATE_FORMAT(HoraAbre,'%h:%i')<=:hora and DATE_FORMAT(HoraFecha,'%h:%i')>=:hora", ['hora'=>$hora]);
		
		$lojas = DB::select("select * from lojas Where DATE_FORMAT(HoraAbre,'%H:%i')<='".$hora."' AND DATE_FORMAT(HoraFecha,'%H:%i')>='".$hora."'");
		
		return view("loja.listaruser", compact("lojas"));
	}
	
	
	public function getAlterar($id){
		try {
		
			$loja = Loja::find($id);
			
			
			return view("loja.novo", compact("loja"));
				
		} catch (Exception $e) {
				
			return Redirect::back()->withErros(["Não foi possível alterar a loja."]);
		
		}
	}
	
	public function getExcluir($id){
				
		try {
		
			$loja = Loja::find($id);
			$loja->forceDelete();	
			return Redirect::back()->with("success","Loja excluida com sucesso!");
				
		} catch (Exception $e) {
				
			return Redirect::back()->withErros(["Não foi possível excluir a loja."]);
		
		}
	
	}
	
	
	public function getLogo(){
		
		$arquivo = $_FILES['file'];
		//$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/public/logomarcas/';
		$uploads_dir = 'C:\\xampp\\htdocs\\testeDex\\public\\logomarcas\\';
		$name = $arquivo["name"];
		
		//	echo var_dump($arquivo);

		if (move_uploaded_file($arquivo['tmp_name'], $uploads_dir.$name )){
			
			
			$msg["success"] = "ok";
			$msg["logo"] = $name;
		}else{
		 	$msg["success"] = "erro";
		}
		
		echo json_encode($msg);
	} 
	
		
}
