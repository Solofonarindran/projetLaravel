<?php 
namespace App\Repository;


class AbstractRepository {

    protected $model;
    protected $relation;

    public function getById($id){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->where('id',$id)
                    ->get();
    }
    
    public function getAll(){
        return $this->model
                    ->newQuery()
                    ->get();
    }
    
    public function edit($id=null,$request=[]){
        return $this->model
                    ->newQuery()
                    ->with($this->relation)
                    ->updateOrCreate(['id'=>$id],$request);
    }

    public function delete($id){
        return $this->model
                    ->newQuery()
                    ->where('id',$id)
                    ->delete();
    }  
}

?>