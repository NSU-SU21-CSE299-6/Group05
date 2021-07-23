<?php
                $exception=Session::get('exception');

                if ($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
                ?> 