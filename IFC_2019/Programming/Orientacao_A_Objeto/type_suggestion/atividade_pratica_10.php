<?php
    // #1
    interface Usuario {
        public function setNomeUsuario($nomeUsuario);
        public function getNomeUsuario();

        public function setSexo($sexo);
        public function getSexo();
    }

    // #2
    class Comentarista implements Usuario {
        private $nomeUsuario;
        private $sexo;

        // nome do usuario
        public function setNomeUsuario($nomeUsuario) {
            return $this -> nomeUsuario = $nomeUsuario;
        }

        public function getNomeUsuario() {
            return $this -> nomeUsuario;
        }

        // sexo
        public function setSexo($sexo) {
            return $this -> sexo = $sexo;
        }

        public function getSexo() {
            return $this -> sexo;
        }

        // #3
        public function verificarSexoDoUsuario(Comentarista $usuario) {
            if ($usuario -> getSexo() == "M") {
                return "Sr. " . $this -> getNomeUsuario();
            } else {
                return "Sra. " . $this -> getNomeUsuario();
            }
        }
    }

    // #4
    $usuarioMasculino = new Comentarista();
    $usuarioMasculino -> setNomeUsuario("Bobby");
    $usuarioMasculino -> setSexo("M");
    echo $usuarioMasculino -> verificarSexoDoUsuario($usuarioMasculino);

    $usuarioFeminina = new Comentarista();
    $usuarioFeminina -> setNomeUsuario("Jane");
    $usuarioFeminina -> setSexo("F");
    echo $usuarioFeminina -> verificarSexoDoUsuario($usuarioFeminina);
?>