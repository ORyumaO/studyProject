<?php

class ClassLoader
{
    protected $dirs;
    
    /**
     * registerAutoLoadDir
     * クラスファイルをオートロード登録する
     * 
     * @return void
     */
    public function registerAutoLoadDir()
    {
        spl_autoload_register([$this, 'loadClass']);
    }

    /**
     * registerAutoLoadOtherDir
     * クラスファイルをオートロード登録するためのセッター
     * 
     * @param  string $dir オートロード対象のフルパスの文字列
     * @return void
     */
    public function addAutoLoadDir(string $dir)
    {
        $this->$dirs[] = $dir;
    }

    /**
     * loadClass
     * オートロード時に自動的に呼び出されて
     * クラスファイルの読み込みを行う
     * 
     * @param  string $class
     * @return void
     */
    public function loadClass(string $class)
    {
        foreach ($this->$dirs as $dir) { 
            $file = $dir . / $class . '.php';

            if (is_readable($file)){
                require $file;

                return;
            }
        }
    }
}