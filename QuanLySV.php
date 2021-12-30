<?php
    class QuanLySV {
        private $dsSV;
        function __contructor() {
            $this->dsSV = [];
        }

        function themSV($sv) {
            array_push($this->dsSV, $sv);
        }

        function lietkeDSSV() {
            foreach($this->dsSV as $sv) {
                $sv->hienThiThongTin();
            }
        }
    }

?>