<?php
    // exercise #1
    class Usuario
    {
        protected $nomeUsuario;

        public function setNome($nomeUsuario)
        {
            $this -> nomeUsuario = $nomeUsuario;
        }

        public function getNome()
        {
            return $this -> nomeUsuario;
        }
    }

    // exercise #2
    interface Autor
    {
        public function setPrivilegiosAutor($arrayAutor);

        public function getPrivilegiosAutor();
    }

    // exercise #3
    interface Editor
    {
        public function setPrivilegiosEditor($arrayEditor);

        public function getPrivilegiosEditor();
    }

    // exercise #4
    class AutorEditor extends Usuario implements Autor, Editor
    {
        private $arrayAutor;
        private $arrayEditor;

        // exercise #5

        // autor
        public function setPrivilegiosAutor($arrayAutor)
        {
            $this -> arrayAutor = $arrayAutor;
        }

        public function getPrivilegiosAutor()
        {
            return $this -> arrayAutor;
        }

        // editor
        public function setPrivilegiosEditor($arrayEditor)
        {
            $this -> arrayEditor = $arrayEditor;
        }

        public function getPrivilegiosEditor()
        {
            return $this -> arrayEditor;
        }

        public function mergeArray()
        {
            $array1 = $this -> getPrivilegiosAutor();
            $array2 = $this -> getPrivilegiosEditor();

            return array_merge($array1, $array2);
        }

        public function arrayView($array)
        {
            foreach ($array as $value)
            {
                echo $value;
            }
        }
    }

    // exercise #6
    $usuario1 = new AutorEditor();
    $usuario1 -> setNome("Meristófole");

    // exercise #7
    $usuario1 -> setPrivilegiosAutor(["escrever texto ", "acrescentar pontuação "]);

    // exercise #8
    $usuario1 -> setPrivilegiosEditor(["editar texto ", "editar pontuação "]);

    // exercise #9
    echo "Olá, " . $usuario1 -> getNome() . ". Você pode " . $usuario1 -> arrayView($usuario1 -> mergeArray());
?>