<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

/**
 *
 * @author pchan
 */
interface InterfaceDeApresentacao {
    
    function find($id);
    function listar($ordem) : array;
    function deletar($id) : bool;
    function alterar($objeto) : bool;
    function inserir($objeto) : bool;
}
