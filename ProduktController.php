<?php
require_once '../config/database.php';

class ProduktController{
  public $db;

  public function _construct(){
      $this->db=new Database();
  }

  //crud

  public function readData(){
      $query=$this->db->pdo->query('Select * from produktet');

      $query->fetchObject();
  }

  public function insert($request){
   
     $query=$this->db->pdo->prepare('insert into produktet(emri,pershkrimi,foto,qmimi)
     values(:emri,:pershkrimi,:foto,:qmimi)');

     $query->execute([':emri' => $request['emri'] ,':pershkrimi' => $request['pershkrimi'], 
     ':foto'=>$request['foto'], ':qmimi'=> $request['qmimi']]);
     /*$query->execute(':emri',$request['emri']);
     $query->bindParam(':pershkrimi',$request['pershkrimi']);
     $query->bindParam(':foto',$request['foto']);
     $query->bindParam(':qmimi',$request['qmimi']);

     $query->execute();*/

     return header('Location: projekti.php');

  }

   public function edit($id){
  $query=$this->db->pdo->prepare('select * from produktet where id=:id');
$query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
public function update($request,$id){
   $query=$this->db->pdo->prepare('update produktet set emri=:emri,pershkrimi=:pershkrimi,
   qmimi=:qmimi where id=:id');

   $query->bindParam(':emri',$request['emri']);
   $query->bindParam(':pershkrimi',$request['pershkrimi']);
   $query->bindParam(':qmimi',$request['qmimi']);
   $query->bindParam(':foto',$request['foto']);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');


}

public function  delete($id){
  $query=$this->db->pdo->prepare('delete fro produktet where id=:id');
  $query->execute();

  return header('location: projekti.php');

}


}

?>