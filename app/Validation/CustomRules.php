<?php

namespace App\Validation;

use PHPUnit\Framework\Constraint\Count;

class CustomRules
{
    public function fileCountRange($str, string  $params, array $data, &$error): bool
    {
        $request = \Config\Services::request();
        $params = explode(",", $params);
        if (count($params) != 3) {
            $error = "Syntax error required 3 params";
            return false;
        }

        [$field, $min, $max] = $params;
        $min = (int)$min;
        $max = (int)$max;


        $files = $request->getFileMultiple($field);
        if (count($files) < $min) {
            $error = "Minimum $min files required";
            return false;
        }
        if (count($files) > $max) {
            $error = "Maximum $min files allowed";
            return false;
        }

        foreach ($files as $file) {

            // d("validation",$file->guessExtension());
            if (!$file->isValid()) {
                $error = $file->getErrorString() . '(' . $file->getError() . ')';
                return false;
            }
            $allowedExt = ["png", "jpg", "jpeg", "webp"];
            if (!in_array($file->guessExtension(), $allowedExt)) {
                $error = "The files must be in  " . implode(",", $allowedExt);
                return false;
            }
        }

        // dd([$files, $params,  $data]);

        return true;
    }
}
