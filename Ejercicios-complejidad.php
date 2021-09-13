<?php
    // Ejercicio 1
    function Intercambia ($x,$y)
    {
        $n = 0;
        $aux = $x; $n++;
        $x = $y; $n++;
        $y = $aux; $n++;
        echo "La complejidad del ejercicio 1 es: ".$n."<hr>";
    }
    Intercambia (3,1);
    // Ejercicio 2
    function maxi ($x,$y)
    {
        $n = 0;
        if ($x >= $y)
        {
            $result = $x;
            $n++;
        }
        else
        {
            $result = $y;
            $n++;
        }
        echo "La complejidad del ejercicio 2 es: ".$n."<hr>";
        return $result;
    }
    maxi (3,5);
    // Ejercicio 3
    function suma ($v,$tamaño)
    {
        $n = 0;
        $result = 0; $n++;
        for($i = 0;$i <= $tamaño-1; $i++)
        {
            $result = $result + $v[$i];
            $n++;
        }
        echo "La complejidad del ejercicio 3 es: ".$n."<hr>";
        return $result;
    }
    suma ($v=[1,2,3],3);
    // Ejercicio 4
    function aSaber1 ($v,$tamaño)
    {
        $n = 0;
        $result = 0; $n++;
        $i = 0; $n++;
        while ($i < $tamaño)
        {
            $result = $result + $v[$i]; $n++;
            $i++; $n++;
        }
        echo "La complejidad del ejercicio 4 es: ".$n."<hr>";
        return $result;
    }
    aSaber1 ($v=[1,2,3],3);
    // Ejercicio 5
    function aSaber2 ($v,$tamaño)
    {
        $n = 0;
        $result = 0; $n++;
        $i = $tamaño - 1; $n++;
        while ($i >= 0)
        {
            $result = $result + $v[$i]; $n++;
            $i--; $n++;
        }
        echo "La complejidad del ejercicio 5 es: ".$n."<hr>";
        return $result;
    }
    aSaber2 ($v=[1,2,3],3);
    // Ejercicio 6
    function aSaber3 ($v,$tamaño)
    {
        $n = 0;
        $result = 0; $n++;
        $i = $tamaño - 1; $n++;
        while ($i >= 0)
        {
            $result = $result + $v[$i];
            $i = $i - 2;
            $n++;
        }
        echo "La complejidad del ejercicio 6 es: ".$n."<hr>";
        return $result;
    }
    aSaber3 ($v=[1,2,3],3);
?>