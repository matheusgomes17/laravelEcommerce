<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 02/07/2015
 * Time: 00:09
 */

namespace CodeCommerce;


class Cart
{
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function add($id, $name, $price)
    {

        $this->itens += [

         $id => [
            'qtd' => (isset($this->itens[$id]['qtd'])) ? $this->itens[$id]['qtd']++ : 1,
            'price' => $price,
            'name' => $name
           ]

        ];

        return $this->itens;
    }

    public function remove($id)
    {
        unset($this->itens[$id]);
    }

    public function all()
    {
        return $this->itens;
    }

    public function getTotal()
    {
        $total = 0;

        foreach($this->itens as $itens)
        {
            $total += $itens['qtd'] * $itens['price'];
        }

        return $total;

    }

}