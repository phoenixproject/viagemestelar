<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cdp\Cliente;
use app\cgd\GenericDao;
use app\cgd\DBConnection;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of ClienteDao
 *
 * @author pchan
 */
class ClienteDao extends GenericDao {
    
    public function __construct(){
        parent::__construct(new Cliente());
    }
    
}