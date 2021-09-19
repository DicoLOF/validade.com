<?php
/**
 * Description of Conexao
 *
 * @author Osvaldo Filho
 */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'admin@mysql');
define('BD', 'validade_db');
define('DRIVER', 'mysql');

class Conexao {

    private static $conexao;
            
    public static function connection() {
        $dss = DRIVER . ":host=" . HOST . ";dbname=" . BD;
        try {
            if (!isset(self::$conexao)):
                self::$conexao = new PDO($dss, USER, PASS);
            endif;

        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco".$e->getMessage();
        }
        return self::$conexao;
    }
}