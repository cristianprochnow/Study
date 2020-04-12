"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/**
 * com o yarn dev (dev é o script configurado 
 * no package.json) ele vai fazer a "tradução" 
 * para o "bundle.js", comforme o script 
 * declarado no arquivo JSON. Mas se for colocado 
 * um "-w" junto ao comando, irá acontecer a mesma 
 * coisa que o --watch do SASS, em que o processo 
 * ficará em aberto, fazendo a tradução instantânea 
 * do script, conforme sua escrita
 */
var List =
/*#__PURE__*/
function () {
  function List() {
    _classCallCheck(this, List);

    this.data = [];
  }

  _createClass(List, [{
    key: "add",
    value: function add(data) {
      this.data.push(data);
      console.log(this.data);
    }
  }]);

  return List;
}();
/**
 * e há também a herança de classes, que nem no PHP
 */


var ToDoList =
/*#__PURE__*/
function (_List) {
  _inherits(ToDoList, _List);

  /**
   * aqui as funções não são que nem no PHP, 
   * em que é necessário todo o escopo do 
   * método (i.e. public function). simplesmente 
   * coloca-se o nome do método em si e pronto, 
   * pode-se usufruir de tudo isso
   */
  function ToDoList() {
    var _this;

    _classCallCheck(this, ToDoList);

    /**
     * "super()" é a mesma coisa que, no PHP, 
     * o "parent::__construct()"
     */
    _this = _possibleConstructorReturn(this, _getPrototypeOf(ToDoList).call(this));
    _this.usuario = 'Cristian';
    return _this;
  }

  _createClass(ToDoList, [{
    key: "mostraUsuario",
    value: function mostraUsuario() {
      console.log(this.usuario);
    }
    /**
     * e aqui há também métodos estáticos, conforme 
     * o PHP, porém há um detalhe
     */

    /**
     * essa função simplesmente não irá funcionar, 
     * pois um método estático não interage com 
     * os outros itens dentro de uma classe. Ele 
     * não vai "enxergar" as propriedades e métodos 
     * que existem dentro dessa classe. Única coisa a 
     * ser reconhecida é o próprio conteúdo criado dentro 
     * deste método estático. Por isso seu uso geralmente se 
     * dá em uma classe solitária em que apenas exista este 
     * ou outros métodos estáticos
     */

    /**
     * métodos estáticos geralmente são usados para uma simples 
     * operação que ganhe valores e em seguida retorne um resultado. 
     * Como por exemplo em uma operação de matemática 
     * (exemplo a seguir)
     */
    // static mostraToDo() {
    //     this.data.push('Show');
    //     console.log(this.data);
    // }

  }]);

  return ToDoList;
}(List);

var Matematica =
/*#__PURE__*/
function () {
  function Matematica() {
    _classCallCheck(this, Matematica);
  }

  _createClass(Matematica, null, [{
    key: "soma",
    value: function soma(x, y) {
      return x + y;
    }
  }]);

  return Matematica;
}();

var MinhaLista = new ToDoList();

document.getElementById('todoSubmit').onclick = function () {
  MinhaLista.add('Novo To Do!');
};

MinhaLista.mostraUsuario();
/**
 * e para referenciar este método estático, 
 * não precisa usar nada de "new", ou então 
 * criar variável etc. Basta simplesmente 
 * chamar a função referenciando a classe 
 * e pronto (exemplo a seguir)
 */

console.log(Matematica.soma(1, 2)); // resultado -> 3
