<?php

class deleteModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteWarehouse($warehouse_code)
    {
<<<<<<< Updated upstream
        $link= $this->delete('warehouse',"warehouse_code = $warehouse_code");

=======
        $this->delete($table,$where);

        }
    
    public function deleteVehicle($id)
    {
        $link= $this->delete('vehicle',"id = $id");

        }
    
    public function deleteProduct($table,$where)
    {
        $this->delete($table,$where);
        
>>>>>>> Stashed changes
        }

    public function deleteBrand($table,$where)
    {
        $this->delete($table,$where);
    
        }

        public function deleteCategory($table,$where)
    {
        $this->delete($table,$where);
    
        }

        public function deleteSubCategory($table,$where)
        {
            $this->delete($table,$where);
        
            }

    }

<<<<<<< Updated upstream
=======
    
>>>>>>> Stashed changes
