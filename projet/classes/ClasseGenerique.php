<?php 
abstract class ClasseGenerique{
public function __construct(array $data=null){
     if($data): 
      $this->hydrater($data);
      endif;
}
     public function hydrater(array $data = null){
        if($data):
            foreach($data as $prop=>$valeur):
                $nomMethode='set'.ucfirst($prop);
                if(method_exists($this, $nomMethode)):
                    $this->$nomMethode($valeur);
             endif;
            endforeach;
        endif;
    }
}