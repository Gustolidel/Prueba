<?php

class EmpleadoBean
{       public $CODEMPLE;
        public $NOMBEMPLE;
        public $APELLIEMPLE;
        
        function getCODEMPLE() {
            return $this->CODEMPLE;
        }

        function getNOMBEMPLE() {
            return $this->NOMBEMPLE;
        }

        function getAPELLIEMPLE() {
            return $this->APELLIEMPLE;
        }

        function setCODEMPLE($CODEMPLE) {
            $this->CODEMPLE = $CODEMPLE;
        }

        function setNOMBEMPLE($NOMBEMPLE) {
            $this->NOMBEMPLE = $NOMBEMPLE;
        }

        function setAPELLIEMPLE($APELLIEMPLE) {
            $this->APELLIEMPLE = $APELLIEMPLE;
        }


}
?>