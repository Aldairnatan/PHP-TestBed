<?php

namespace PhpTestBed\Node\Expr\AssignOp;

/**
 * Mod within assing operation $a %= 1.
 * @package PhpTestBed
 * @copyright (c) 2017, Federal Institute of Rondonia
 * @license https://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 * @author Natanael Simoes <natanael.simoes@ifro.edu.br>
 * @since Release 0.2.0
 * @link https://github.com/ifroariquemes/PHP-TestBed Github repository
 */
class Mod extends NodeAssignOpAbstract
{

    /**
     * Initializes object with a PhpParser AssignOp Mod statemtent.
     * @param \PhpParser\Node\Expr\AssignOp\Mod $statement The statement
     */
    public function __construct(\PhpParser\Node\Expr\AssignOp\Mod $statement)
    {
        $this->signal = '%';
        parent::__construct($statement);
    }

}
