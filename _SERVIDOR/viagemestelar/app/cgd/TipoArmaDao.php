<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cdp\TipoArma;
use app\cgd\GenericDao;
/**
 * Description of TipoArmaDao
 *
 * @author pchan
 */
class TipoArmaDao extends GenericDao {
    
    public function __construct(){
        parent::__construct(new TipoArma());
    }
    
}
