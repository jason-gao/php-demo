<?php
date_default_timezone_set('Asia/Shanghai');


//var_dump(glob('E:\YunDun\jason-gao\php-demo\*.conf'));
//var_dump(glob('E:\YunDun\jason-gao\php-demo\*.md'));
//var_dump(glob('E:\YunDun\jason-gao\php-demo\test\{*.php,*.md}', GLOB_BRACE));

//foreach(glob('E:\YunDun\jason-gao\php-demo\test\{*.php,*.md,*.conf}', GLOB_BRACE) as $config_file)
//{
//
//    $suffix = pathinfo($config_file,PATHINFO_EXTENSION);
//    $name = basename($config_file, ".$suffix");
//    echo $name."-".time()."-name\n";
//}
//
//
//echo 1;
//
//function findFiles($directory, $extensions = array()) {
//    function glob_recursive($directory, &$directories = array()) {
//        foreach(glob($directory, GLOB_ONLYDIR | GLOB_NOSORT) as $folder) {
//            $directories[] = $folder;
//            glob_recursive("{$folder}/*", $directories);
//        }
//    }
//    glob_recursive($directory, $directories);
//    $files = array ();
//    foreach($directories as $directory) {
//        foreach($extensions as $extension) {
//            foreach(glob("{$directory}/*.{$extension}") as $file) {
//                $files[$extension][] = $file;
//            }
//        }
//    }
//    return $files;
//}
//var_dump(findFiles("C:", array (
//
//    "jpg",
//    "pdf",
//    "png",
//    "html"
//)));


//$checksum = crc32("abc123");
//printf("%u\n", $checksum);
//echo $checksum;
//$checksum = crc32(3473062748);
//echo "\n";
//printf("%u\n", $checksum);
//echo $checksum;


//function rc4($pwd, $data)
//{
//    $cipher      = '';
//    $key[]       = "";
//    $box[]       = "";
//    $pwd_length  = strlen($pwd);
//    $data_length = strlen($data);
//    for ($i = 0; $i < 256; $i++) {
//        $key[$i] = ord($pwd[$i % $pwd_length]);
//        $box[$i] = $i;
//    }
//    for ($j = $i = 0; $i < 256; $i++) {
//        $j       = ($j + $box[$i] + $key[$i]) % 256;
//        $tmp     = $box[$i];
//        $box[$i] = $box[$j];
//        $box[$j] = $tmp;
//    }
//    for ($a = $j = $i = 0; $i < $data_length; $i++) {
//        $a       = ($a + 1) % 256;
//        $j       = ($j + $box[$a]) % 256;
//        $tmp     = $box[$a];
//        $box[$a] = $box[$j];
//        $box[$j] = $tmp;
//        $k       = $box[(($box[$a] + $box[$j]) % 256)];
//        $cipher .= chr(ord($data[$i]) ^ $k);
//    }
//    return $cipher;
//}
//
//$pwd = "##abc*#123";
//$password = 'abc123';
//$data = str_repeat(rand(), 4).'.'.$password;
//
//$r = base64_encode(rc4($pwd, $data));
//
//echo $r."\n";
//
//echo rc4($pwd, base64_decode($r));
//
//
//echo "\n";
////
//
//
//
//class Aes
//{
//    /**
//     * var string $method 加解密方法，可通过openssl_get_cipher_methods()获得
//     */
//    protected $method;
//
//    /**
//     * var string $secret_key 加解密的密钥
//     */
//    protected $secret_key;
//
//    /**
//     * var string $iv 加解密的向量，有些方法需要设置比如CBC
//     */
//    protected $iv;
//
//    /**
//     * var string $options （不知道怎么解释，目前设置为0没什么问题）
//     */
//    protected $options;
//
//    /**
//     * 构造函数
//     *
//     * @param string $key 密钥
//     * @param string $method 加密方式
//     * @param string $iv iv向量
//     * @param mixed $options 还不是很清楚
//     *
//     */
//    public function __construct($key, $method = 'AES-128-ECB', $iv = '', $options = 0)
//    {
//        // key是必须要设置的
//        $this->secret_key = isset($key) ? $key : 'morefun';
//
//        $this->method = $method;
//
//        $this->iv = $iv;
//
//        $this->options = $options;
//    }
//
//    /**
//     * 加密方法，对数据进行加密，返回加密后的数据
//     *
//     * @param string $data 要加密的数据
//     *
//     * @return string
//     *
//     */
//    public function encrypt($data)
//    {
//        return openssl_encrypt($data, $this->method, $this->secret_key, $this->options, $this->iv);
//    }
//
//    /**
//     * 解密方法，对数据进行解密，返回解密后的数据
//     *
//     * @param string $data 要解密的数据
//     *
//     * @return string
//     *
//     */
//    public function decrypt($data)
//    {
//        return openssl_decrypt($data, $this->method, $this->secret_key, $this->options, $this->iv);
//    }
//}
//
//$aes = new Aes('12345678');
//
//$encrypted = $aes->encrypt('bbm是一家很傻逼的公司');
//
//echo '要加密的字符串：bbm是一家很傻逼的公司<br>加密后的字符串：', $encrypted, '---';
//
//$decrypted = $aes->decrypt($encrypted);
//
//echo '要解密的字符串：', $encrypted, '解密后的字符串：', $decrypted;


