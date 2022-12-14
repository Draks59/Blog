<?php

namespace App\Model;

use Core\Model\Table;

class CategoryModel extends Table
{

    protected $table = "categories";

    /**
     * It returns a string that is the URL of the product page for the product that the function is called
     * on.
     * 
     * @return The URL of the product.
     */
    public function getUrl()
    {
        return 'index.php?p=products.show&id=' . $this->id;
    }
}
