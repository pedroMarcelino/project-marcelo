create database db_amm;

use db_amm;

CREATE TABLE user
(
  cd_user int
(11) NOT NULL,
  nome varchar
(30) DEFAULT NULL,
  pass varchar
(32) DEFAULT NULL,
  regional varchar
(50) NOT NULL,
  reg_pais varchar
(30) NOT NULL,
  nm_completo varchar
(50) NOT NULL,
  nm_guerra varchar
(30) NOT NULL,
  rg varchar
(30) NOT NULL,
  cpf varchar
(30) NOT NULL,
  cnh varchar
(30) NOT NULL,
  venc_cnh varchar
(30) NOT NULL,
  dt_nasc varchar
(30) NOT NULL,
  natu varchar
(30) NOT NULL,
  nacio varchar
(30) NOT NULL,
  est_civil varchar
(30) NOT NULL,
  conj varchar
(10) NOT NULL,
  enderc varchar
(30) NOT NULL,
  num varchar
(30) NOT NULL,
  apto varchar
(30) NOT NULL,
  bairro varchar
(30) NOT NULL,
  cep varchar
(30) NOT NULL,
  cidade varchar
(30) NOT NULL,
  estado varchar
(30) NOT NULL,
  email varchar
(30) NOT NULL,
  wpp varchar
(30) NOT NULL,
  religiao varchar
(30) NOT NULL,
  igr_frenq varchar
(30) NOT NULL,
  categoria varchar
(30) NOT NULL,
  peso varchar
(30) NOT NULL,
  altura varchar
(30) NOT NULL,
  camisa varchar
(30) NOT NULL,
  calca varchar
(30) NOT NULL,
  grau_instr varchar
(30) NOT NULL,
  escudo varchar
(30) NOT NULL,
  dt_escudo varchar
(30) NOT NULL,
  tp_sangue varchar
(30) NOT NULL,
  sexo varchar
(30) NOT NULL,
  doador varchar
(30) NOT NULL,
  vegetariano varchar
(30) NOT NULL,
  rest_alim varchar
(30) NOT NULL,
  alerg varchar
(30) NOT NULL,
  marca varchar
(30) NOT NULL,
  modelo varchar
(30) NOT NULL,
  ano varchar
(30) NOT NULL,
  cilindrada varchar
(30) NOT NULL,
  cor varchar
(30) NOT NULL,
  placa varchar
(30) NOT NULL,
  declaro varchar
(30) NOT NULL,
  vl_mensalid varchar
(30) NOT NULL,
  tenis varchar
(30) DEFAULT NULL,
  tipo int
(11) DEFAULT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE user
ADD PRIMARY KEY
(cd_user);

ALTER TABLE user
  MODIFY cd_user int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/********************************************************************************/

create database db_amm;

use db_amm;

CREATE TABLE user
(
  cd_user int
(11) NOT NULL,
  nome varchar
(30) DEFAULT NULL,
  pass varchar
(32) DEFAULT NULL,
  regional varchar
(50) NOT NULL,
  reg_pais varchar
(30) NOT NULL,
  nm_completo varchar
(50) NOT NULL,
  nm_guerra varchar
(30) NOT NULL,
  rg varchar
(30) NOT NULL,
  cpf varchar
(30) NOT NULL,
  cnh varchar
(30) NOT NULL,
  venc_cnh varchar
(30) NOT NULL,
  dt_nasc varchar
(30) NOT NULL,
  natu varchar
(30) NOT NULL,
  nacio varchar
(30) NOT NULL,
  est_civil varchar
(30) NOT NULL,
  conj varchar
(10) NOT NULL,
  enderc varchar
(30) NOT NULL,
  num varchar
(30) NOT NULL,
  apto varchar
(30) NOT NULL,
  bairro varchar
(30) NOT NULL,
  cep varchar
(30) NOT NULL,
  cidade varchar
(30) NOT NULL,
  estado varchar
(30) NOT NULL,
  email varchar
(30) NOT NULL unique,
  wpp varchar
(30) NOT NULL,
  religiao varchar
(30) NOT NULL,
  igr_frenq varchar
(30) NOT NULL,
  categoria varchar
(30) NOT NULL,
  peso varchar
(30) NOT NULL,
  altura varchar
(30) NOT NULL,
  camisa varchar
(30) NOT NULL,
  calca varchar
(30) NOT NULL,
  grau_instr varchar
(30) NOT NULL,
  escudo varchar
(30) NOT NULL,
  dt_escudo varchar
(30) NOT NULL,
  tp_sangue varchar
(30) NOT NULL,
  sexo varchar
(30) NOT NULL,
  doador varchar
(30) NOT NULL,
  vegetariano varchar
(30) NOT NULL,
  rest_alim varchar
(30) NOT NULL,
  alerg varchar
(30) NOT NULL,
  marca varchar
(30) NOT NULL,
  modelo varchar
(30) NOT NULL,
  ano varchar
(30) NOT NULL,
  cilindrada varchar
(30) NOT NULL,
  cor varchar
(30) NOT NULL,
  placa varchar
(30) NOT NULL,
  declaro varchar
(30) NOT NULL,
  vl_mensalid varchar
(30) NOT NULL,
  tenis varchar
(30) DEFAULT NULL,
  tipo int
(11) DEFAULT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE user
ADD PRIMARY KEY
(cd_user);

ALTER TABLE user
  MODIFY cd_user int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;