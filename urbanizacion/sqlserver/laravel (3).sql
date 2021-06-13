-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2021 a las 23:15:03
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
create Database Sistema_de_informacion 
use  Sistema_de_informacion

--
-- Estructura de tabla para la tabla  users 
--

CREATE TABLE  users  (
   id  integer   NOT NULL,
   name  varchar(255) NOT NULL,
   carnet  varchar(255)   NOT NULL,
   email  varchar(255)   NOT NULL,
   password  varchar(255)   NOT NULL,
   tipo_vendedor  INT NOT NULL,
   tipo_visita  INT NOT NULL,
   tipo_cliente  INT NOT NULL,
   tipo_administrador  INT NOT NULL,
   PRIMARY KEY (id)
); 
SELECT * FROM users
--
-- Volcado de datos para la tabla  users 
--

INSERT INTO  users  ( id ,  name ,  carnet ,  email  ,  password  ,  tipo_vendedor ,  tipo_visita ,  tipo_cliente ,  tipo_administrador ) VALUES
(1, 'Carlos Castro Flores ', '4717552', 'carloscastroflores03@gmail.com', '$2y$10$7MRiJswypdpki5XBKRuTZ.Nrm9ds3OGxgyCE2uGXC04qnc2.5yQAG', 0, 0, 0, 1),
(2, 'Carolina Duran Reyes', '5687890', 'carolinitatubebesota12@gmail.com', '$2y$10$/6dNSuk3uWPlzRzdb6QJjurAxVKMeWGUqTLZ4uEUWcF4G8oSH9tNm', 0, 0, 1, 0),
(3, 'Juan Cabrera Castro ', '4517562', 'juancito@gmail.com', '$2y$10$ivlF2sJR589vTHjMITlpMOgY7abBuneAN5blooFFFSbqOby4TP06O', 0, 0, 1, 0),
(4, 'Jose Wurner Yucra ', '4915532', 'wurner589@gmail.com', '$2y$10$Q0WB8EEO3pNyrL5Mz7h6NeoPxbJE3wjdffr6/SQ1jH3Lx41BkzuFy',  0, 0, 1, 0),
(5, 'Mariela Loayza Guzman', '4788255', 'mariela123@gmail.com', '$2y$10$kf/SG0bRlWI2yMIOZAbUJ.U7r4BpgyDgIn4Zd8We5wyYOZl5MFgje', 0, 0, 1, 0),
(6, 'Fabio Fernandez', '4789255', 'FFernandez@gmail.com', '$2y$10$mme3NvaUC1MZYcrOJaY0DexgksQLf1oEHYDethnrmT59UmDd0qAQW', 0, 0, 1, 0),
(7, 'Daniel Cortez Roca', '1894126', 'danicroca12@gmail.com', '$2y$10$hfQ1TJev/H5aEt5Opzmom.1P9L.5Cvxca70Cp3tnn17KkXq6fpIhu', 0, 0, 1, 0),
(8, 'Junior Figueroa Prado', '6867257', 'jusfipra23@gmail.com', '$2y$10$qyf9jYn/zKpnLqhK559mP.wXTnr2RYd.5PIfMDdA1YVLuiVB5AcjW',  0, 0, 1, 0),
(9, 'Karla Mamani Flores ', '4915532', 'karlitamf5@gmail.com', '$2y$10$h3768ASv9SKU2s9rukjR9uUYLniGVmmpJA7blRyPdeH6iNhHnomja',  1, 0, 0, 0),
(10, 'Camila Duran Arteaga ', '4915532', 'camilitada@gmail.com', '$2y$10$a6IXec3GjdfsC7jKevbHOumJ0FBA0/dY5fRpNrKl0E4QUICfvijh2',  1, 0, 0, 0),
(11, 'Milagros Rodriguez Cabello', '5798712', 'milarodriguez56@gmail.com', '$2y$10$FKLEs4qoO/0XL7s7d/9T6edX7naLy78fPWrNOfmP/UZEHHMAN8UxG',  1, 0, 0, 0),
(12, 'Marianela Coimbra Caballero', '8465684', 'marianelacc@gmail.com', '$2y$10$hoOZEWVs37GcEIFRS/T9PeiUUTyqJN9Q0UTJWSRYfMK37gKoylQ82', 1, 0, 0, 0),
(13, 'Juan Carlos Lazo Zabala', '4687321', 'juancarlos83@gmail.com', '$2y$10$kahpGw6/I6W0gm7.G4safe.zKfOC7Sq7kHiXFrQGn5jRBvCKAvXIq', 0, 1, 0, 0),
(14, 'Cristina Duran Reyes', '5588890', 'cristinini1003@gmail.com', '$2y$10$pptkD1XVfzx3bYH0RVgX5.6sMhtE/UY2LFyxg46pnE5i8WH2x4GoW', 0, 1, 0, 0),
(15, 'Dantte Montaner Reyes', '5687890', 'prodante1998@gmail.com', '$2y$10$bnSCkCZO0EoBb58PAr6TCOiOdyOr.RuZrrAZbTjLmT3jvrdPKTzda', 0, 1, 0, 0);

-- --------------------------------------------------------
 ----Estructura de tabla para la tabla  telefono_persona 


CREATE TABLE  telefono_persona  (
   id  integer   NOT NULL,
   id_users  integer   NOT NULL,
   telefono  int NOT NULL,
   PRIMARY KEY (id),
   foreign key (id_users) references users(id)
    
)  

--
-- Volcado de datos para la tabla  telefono_persona 
--

INSERT INTO  telefono_persona(id,id_users,telefono ) VALUES
(1, 1, 33448957),
(2, 1, 67852478),
(3, 2, 74563218),
(4, 3, 75895757),
(5, 4, 3358785),
(6, 4, 78168518),
(7, 5, 73245218),
(8, 6, 74789518),
(9, 7, 66563471),
(10, 8, 68726987),
(11, 9, 6100800 ),
(12, 9, 68587975),
(13, 10, 72181418),
(14, 11, 72172482 ),
(15, 12, 6897111),
(16, 13, 68471002 ),
(17, 13, 66554487 ),
(18, 14, 67894561),
(19, 15, 78545225);

select *from telefono_persona
--


--
-- Estructura de tabla para la tabla  pago 
--

CREATE TABLE  pago  (
   id  integer   NOT NULL,
   tipo  varchar(255) NOT NULL,
   primary key (id) 
    
)  

--
-- Volcado de datos para la tabla  pago 
--

INSERT INTO  pago ( id ,  tipo ) VALUES
(1, 'credito' ),
(2, 'compromiso' ),
(3, 'contado' );

-- --------------------------------------------------------
-- Estructura de tabla para la tabla  credito 
--

CREATE TABLE  credito  (
   id  integer   NOT NULL,
   cuota_inicial  float NOT NULL,
   plazo  integer NOT NULL,
   interes_anual  float NOT NULL,
   cuota_mensual  float NOT NULL,
   fecha_prog  varchar(255)   NOT NULL,
   fecha_inicio  date NOT NULL,
   fecha_ultima_cuota  date NOT NULL,
   estado  varchar (255) NOT NULL,
   saldo_financiado float NOT NULL,
   pago_id  integer  NOT NULL,
   primary key (id),
   foreign key (pago_id) references pago (id)
    
)  

--
-- Volcado de datos para la tabla  credito 
--

INSERT INTO  credito ( id ,  cuota_inicial ,  plazo ,  interes_anual ,  cuota_mensual ,  fecha_prog ,  fecha_inicio ,  fecha_ultima_cuota ,  estado ,  saldo_financiado ,  pago_id ) VALUES
(1, 5760, 15, 1312, 255, '1 de cada mes', '2018-02-01', '2032-02-01', 'Activo', 26240.00, 1 ),
(2, 4500, 15, 1025, 174, '1 de cada mes', '2020-05-01', '2035-05-01', 'Activo', 16000.00, 1 ),
(3, 5400, 15, 1230, 239, '1 de cada mes', '2019-03-01', '2034-03-01', 'Activo', 24600.00, 1 );

select *from credito

-- Estructura de tabla para la tabla  compromiso 
--
CREATE TABLE  compromiso  (
   id  integer   NOT NULL,
   monto_pagado  float NOT NULL,
   monto_a_pagar  float NOT NULL,
   fecha_pago_garantia  date NOT NULL,
   fecha_a_pagar  date NOT NULL,
   pago_id  integer   NOT NULL,
    primary key (id),
   foreign key (pago_id) references pago(id)
    
    
)  

--
-- Volcado de datos para la tabla  compromiso 
--

INSERT INTO  compromiso( id ,  monto_pagado ,  monto_a_pagar ,  fecha_pago_garantia ,  fecha_a_pagar ,  pago_id ) VALUES
(1, 25000.00, 20000.00, '2018-01-01', '2018-04-03', 2),
(2, 35000.00, 10000.00, '2017-02-12', '2018-03-01', 2);

-- --------------------------------------------------------
-- Estructura de tabla para la tabla  contado 
--

CREATE TABLE  contado  (
   id  integer   NOT NULL,
   monto  float NOT NULL,
   descuento  float NOT NULL,
   fecha_de_pago  date NOT NULL,
   pago_id  integer   NOT NULL,
     primary key (id),
   foreign key (pago_id) references pago(id)
    
    
)  

--
-- Volcado de datos para la tabla  contado 
--

INSERT INTO  contado  ( id ,  monto ,  descuento ,  fecha_de_pago ,  pago_id ) VALUES
(1, 42750.00, 2250.00, '2021-02-02', 3),
(2, 33725.00, 1775.00, '2021-04-18', 3);

-- --------------------------------------------------------
-- Estructura de tabla para la tabla  manzana 
--

CREATE TABLE  manzana  (
   id  integer   NOT NULL,
   superficie_manzana  float NOT NULL,
   cantidad_de_terreno  integer NOT NULL,
   ubicacion  varchar(255)   NOT NULL,
       primary key (id)

)  
--
-- Volcado de datos para la tabla  manzana 
--

INSERT INTO  manzana  ( id ,  superficie_manzana ,  cantidad_de_terreno ,  ubicacion ) VALUES
(1, 3640.00, 26, 'norte'),
(2, 2900.00, 21, 'este'),
(3, 3300.00, 25, 'oeste');

-- --------------------------------------------------------
CREATE TABLE  contrato  (
   id  integer   NOT NULL,
   fecha_adjudicacion  date NOT NULL,
   monto  float NOT NULL,
   id_user  integer   NOT NULL,
   codigo_pago  integer   NOT NULL
   primary key (id),
   foreign key (id_user) references users(id),
   foreign key (codigo_pago) references pago(id)
)  

--
-- Volcado de datos para la tabla  contrato 
--

INSERT INTO  contrato ( id ,  fecha_adjudicacion ,  monto ,  id_user ,  codigo_pago ) VALUES
(1, '2018-02-01', 32000.00, 2, 1),
(2, '2020-05-01', 25000.00, 3, 1),
(3, '2019-03-01', 30000.00, 4, 1),
(4, '2018-01-01', 45000.00, 5, 2),
(5, '2017-12-02', 45000.00, 6, 2),
(6, '2021-02-02', 42750.00, 7, 3),
(7, '2021-04-18', 33725.00, 8, 3);

-- --------------------------------------------------------
--
--- Estructura de tabla para la tabla  mora 
--

CREATE TABLE  mora  (
   id  integer NOT NULL,
   multa  float NOT NULL,
   retraso_dia  int NOT NULL,
   primary key (id)
    
)  
-----Volcado de datos para la tabla  mora 
INSERT INTO  mora  ( id ,  multa ,  retraso_dia  ) VALUES
(1, 15, 2),
(2, 26, 5 ),
(3, 31, 4 ),
(4, 43, 6 ),
(5, 22, 3 );

-- --------------------------------------------------------
-- Estructura de tabla para la tabla  cuota 
CREATE TABLE  cuota  (
   id  integer   NOT NULL,
   id_credito  integer   NOT NULL,
   id_mora  integer   NOT NULL,
   amortizacion  float NOT NULL,
   monto_cuota  int NOT NULL,
   primary key (id),
   foreign key (id_credito) references credito (id),
   foreign key (id_mora) references mora(id)   
)  
-- Volcado de datos para la tabla  cuota 
INSERT INTO  cuota  ( id ,id_credito ,id_mora ,amortizacion,monto_cuota ) VALUES
(1, 1, 1, 55.00, 255 ),
(2, 1, 3, 55.00, 255 ),
(3, 2, 2, 30.00, 174 ),
(4, 3, 4, 60.00, 239),
(5, 3, 5, 60.00, 239);

-- --------------------------------------------------------

-- Estructura de tabla para la tabla  terreno 
--

CREATE TABLE  terreno  (
   id  integer   NOT NULL,
   id_contrato  integer   DEFAULT NULL,
   id_manzana  integer   NOT NULL,
   id_users  integer   DEFAULT NULL,
   superficie_terreno  float  NOT NULL,
   precio  float NOT NULL,
   estado_terreno  varchar(255)  NOT NULL,
    primary key (id),
	foreign key (id_contrato) references contrato(id),
	foreign key (id_manzana) references manzana(id),
	foreign key (id_users) references users(id),

   
)  

--
-- Volcado de datos para la tabla  terreno 
--

INSERT INTO  terreno  ( id ,  id_contrato ,  id_manzana ,  id_users ,  superficie_terreno ,  precio ,  estado_terreno ) VALUES
(1, 1, 1, 2, 150.00, 32000.00, 'ocupado'),
(2, 7, 1, 8, 150.00, 33725.00, 'ocupado'),
(3, 4, 1, 5, 180.00, 45000.00, 'ocupado' ),
(4, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(5, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(6, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(7, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(8, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(9, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(10, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(11, NULL, 1, NULL, 100.00, 55000.00, 'libre'),
(12, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(13, NULL, 1, NULL, 100.00, 35000.00, 'libre'),
(14, NULL, 1, NULL, 150.00, 40000.00, 'libre'),
(15, NULL, 1, NULL, 150.00, 40000.00, 'libre' ),
(16, NULL, 1, NULL, 150.00, 40000.00, 'libre' ),
(17, NULL, 1, NULL, 150.00, 40000.00, 'libre' ),
(18, NULL, 1, NULL, 150.00, 40000.00, 'libre' ),
(19, NULL, 1, NULL, 150.00, 40000.00, 'libre' ),
(20, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(21, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(22, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(23, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(24, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(25, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(26, NULL, 1, NULL, 180.00, 40000.00, 'libre' ),
(27, 5, 2, 6, 180.00, 45000.00, 'ocupado' ),
(28, NULL, 2, NULL, 180.00, 45000.00, 'libre'),
(29, NULL, 2, NULL, 180.00, 45000.00, 'libre' ),
(30, NULL, 2, NULL, 180.00, 45000.00, 'libre' ),
(31, NULL, 2, NULL, 180.00, 45000.00, 'libre' ),
(32, NULL, 2, NULL, 150.00, 40000.00, 'libre' ),
(33, NULL, 2, NULL, 150.00, 40000.00, 'libre'),
(34, NULL, 2, NULL, 150.00, 40000.00, 'libre' ),
(35, NULL, 2, NULL, 150.00, 40000.00, 'libre'),
(36, NULL, 2, NULL, 150.00, 40000.00, 'libre'),
(37, NULL, 2, NULL, 150.00, 40000.00, 'libre' ),
(38, NULL, 2, NULL, 150.00, 40000.00, 'libre'),
(39, NULL, 2, NULL, 150.00, 40000.00, 'libre' ),
(40, 2, 2, 3, 100.00, 25000.00, 'ocupado'),
(41, NULL, 2, NULL, 100.00, 35000.00, 'libre' ),
(42, NULL, 2, NULL, 100.00, 35000.00, 'libre' ),
(43, NULL, 2, NULL, 100.00, 35000.00, 'libre' ),
(44, NULL, 2, NULL, 100.00, 35000.00, 'libre' ),
(45, NULL, 2, NULL, 100.00, 35000.00, 'libre' ),
(46, NULL, 2, NULL, 100.00, 35000.00, 'libre'),
(47, NULL, 2, NULL, 100.00, 35000.00, 'libre'),
(48, 3, 3, 4, 100.00, 30000.00, 'ocupado'),
(49, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(50, NULL, 3, NULL, 100.00, 35000.00, 'libre' ),
(51, NULL, 3, NULL, 100.00, 35000.00, 'libre' ),
(52, NULL, 3, NULL, 100.00, 35000.00, 'libre' ),
(53, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(54, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(55, NULL, 3, NULL, 100.00, 35000.00, 'libre' ),
(56, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(57, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(58, NULL, 3, NULL, 100.00, 35000.00, 'libre'),
(59, NULL, 3, NULL, 100.00, 35000.00, 'libre' ),
(60, NULL, 3, NULL, 150.00, 40000.00, 'libre' ),
(61, NULL, 3, NULL, 150.00, 40000.00, 'libre' ),
(62, NULL, 3, NULL, 150.00, 40000.00, 'libre' ),
(63, NULL, 3, NULL, 150.00, 40000.00, 'libre'),
(64, NULL, 3, NULL, 150.00, 40000.00, 'libre' ),
(65, NULL, 3, NULL, 150.00, 40000.00, 'libre'),
(66, NULL, 3, NULL, 150.00, 40000.00, 'libre'),
(67, NULL, 3, NULL, 150.00, 40000.00, 'libre' ),
(68, 6, 3, 7, 180.00, 42750.00, 'ocupado'),
(69, NULL, 3, NULL, 180.00, 45000.00, 'libre' ),
(70, NULL, 3, NULL, 180.00, 45000.00, 'libre'),
(71, NULL, 3, NULL, 180.00, 45000.00, 'libre' ),
(72, NULL, 3, NULL, 180.00, 45000.00, 'libre');

select *from terreno
-- --------------------------------------------------------
---- Estructura de tabla para la tabla  vende 
--

CREATE TABLE  vende  (
   id  integer   NOT NULL,
   id_user  integer   NOT NULL,
   id_lote  integer   NOT NULL,
   comision  float NOT NULL,
    primary key (id),
	foreign key (id_user) references users(id),
	foreign key (id_lote) references terreno(id),
)  
--
-- Volcado de datos para la tabla  vende 
--

INSERT INTO  vende  ( id ,  id_user ,  id_lote ,  comision ) VALUES
(1, 9, 1, 1600.00),
(2, 10, 2, 2023.50),
(3, 11, 3, 2250.00),
(4, 12, 27, 2250.00),
(5, 12, 40, 1250.00),
(6, 12, 48, 1500.00),
(7, 12, 68, 2565.00);

-- Estructura de tabla para la tabla  reserva 
--

CREATE TABLE  reserva  (
   id  integer   NOT NULL,
   id_user  integer   NOT NULL,
   id_lote  integer   NOT NULL,
   horario_de_visita  datetime NOT NULL,
   primary key (id),
	foreign key (id_user) references users(id),
	foreign key (id_lote) references terreno(id), 
    
)  

--
-- Volcado de datos para la tabla  reserva 
--

INSERT INTO  reserva  ( id ,  id_user ,  id_lote ,  horario_de_visita ) VALUES
(1, 13, 5, '2018-12-05T15:00:00' ),
(2, 14, 38, '2018-12-05T14:30:00' ),
(3, 15, 57, '2021-06-25T10:30:00');
-- ---------------------------------------------------
-- Estructura de tabla para la tabla  bitacora 
--

CREATE TABLE  bitacora  (
   id  integer   NOT NULL,
   id_user  integer   NOT NULL,
   primary key (id),
   foreign key(id_user) references users(id)
)  

--
-- Volcado de datos para la tabla  bitacora 
--

INSERT INTO  bitacora  ( id ,  id_user ) VALUES
(1, 1 );

-- --------------------------------------------------------

-- Estructura de tabla para la tabla  nota 
--

CREATE TABLE  nota  (
   id  integer   NOT NULL,
   descripcion  varchar(255) NOT NULL,
   Fecha  date NOT NULL,
   id_bitacora  integer   NOT NULL,
   primary key (id),
   foreign key(id_bitacora) references bitacora(id) 
    
)  

--
-- Volcado de datos para la tabla  nota 
--

INSERT INTO  nota  ( id ,  descripcion ,  Fecha ,  id_bitacora ) VALUES
(1, 'agrego contrato', '2018-02-01', 1),
(2, 'agrego contrato', '2020-05-01', 1 ),
(3, 'agrego contrato', '2019-03-01', 1),
(4, 'agrego contrato', '2018-01-01', 1  ),
(5, 'agrego contrato', '2017-12-02', 1 ),
(6, 'agrego contrato', '2021-02-02', 1 ),
(7, 'agrego contrato', '2021-04-18', 1);

-- --------------------------------------------------------\
---1-Mostrar los clientes que compraron un terreno a credito 

select distinct  users.id, users.name,  users.carnet,pago.tipo
from users,terreno,pago,contrato
where users.id=contrato.id_user and contrato.codigo_pago=pago.id and pago.tipo='credito' and users.tipo_cliente=1

--2-Mostrar la cantidad de terrenos libres 

select count(*)as cantidad_libres
from terreno
where terreno.estado_terreno='libre'

--3--mostrar la cantidad de terrenos libres por manzana 

select manzana.id as manzana ,manzana.ubicacion,count(*)as terrenos_libres_por_manzana
from terreno,manzana
where terreno.id_manzana=manzana.id and  terreno.estado_terreno='libre'
group by manzana.id,manzana.ubicacion

----4--mostrar la lista que reveservaron visitar un terreno 

select users.name,reserva.horario_de_visita,terreno.id as Numero_Terreno,terreno.precio
from terreno,reserva,users
where users.id=reserva.id_user and reserva.id_lote=terreno.id





---5---mostrar los clientes que pagaron los terrenos al contado 

select distinct  users.id, users.name,  users.carnet,pago.tipo
from users,terreno,pago,contrato
where users.id=contrato.id_user and contrato.codigo_pago=pago.id and pago.tipo='contado' and users.tipo_cliente=1

---6--mostrar los clientes que pagaron los terrenos al compromiso 
select distinct  users.id, users.name,  users.carnet,pago.tipo
from users,terreno,pago,contrato
where users.id=contrato.id_user and contrato.codigo_pago=pago.id and pago.tipo='compromiso' and users.tipo_cliente=1

--7-- mostrar los terrenos vendidos de cada vendedor----

select terreno.id,users.name
from users,terreno,vende
where users.id=vende.id_user and terreno.id=vende.id_lote and tipo_vendedor=1

--8-- mostrar la cantidad de terrenos vendidos de cada vendedor y cuanto gano en comision ----

select users.name,count(vende.id_lote)as Terrenos_vendidos,sum(vende.comision)as total_ganado
from users,terreno,vende
where users.id=vende.id_user and terreno.id=vende.id_lote and tipo_vendedor=1
group by users.name

--9-mostrar los terrenos vendidos a un precio menor de 35000
select terreno.id,contrato.monto
from terreno,contrato
where terreno.id_contrato=contrato.id and contrato.monto<35000
---10--mostrar los terrenos vendidos de cada manzana
select manzana.id as manzana ,manzana.ubicacion,count(*)as terrenos_vendidos_por_manzana
from terreno,manzana
where terreno.id_manzana=manzana.id and  terreno.estado_terreno='ocupado'
group by manzana.id,manzana.ubicacion

---11--los clientes que tiene mora 

select distinct users.carnet,users.name
from users,contrato,pago,credito,cuota,mora
where users.id=contrato.id_user and contrato.codigo_pago=pago.id and
		pago.id=credito.pago_id and credito.id=cuota.id_credito and
		cuota.id_mora=mora.id
group by users.carnet, users.name
----12---mostrar los telefonos de todos los clientes
select users.name,telefono
from telefono_persona,users
where users.id=telefono_persona.id_users and tipo_cliente=1 
---13---cuantas cuotas pagadas tiene cada credito
select  credito.id,users.name,count(cuota.id_credito)as cuotas_pagadas
from credito,cuota,users,contrato,pago
where credito.id=cuota.id_credito and users.id=contrato.id_user and contrato.codigo_pago=pago.id and pago.id=credito.pago_id 
group by credito.id, users.name


select credito.id,count(cuota.id_credito)
from credito,cuota
where credito.id=cuota.id_credito
group by credito.id


---cual fue el terrono mas caro vendido
---cuanto es el ingreso total por los terrenos vendidos


--13-Mostrar el cliente con el mayor retraso en dias 
select users.name,max(retraso_dia)
from users,contrato,pago,credito,cuota,mora
where users.id=contrato.id_user and contrato.codigo_pago=pago.id and pago.id=credito.pago_id
and credito.id=cuota.id_credito and cuota.id_mora=mora.id
group by users.name

--12-mostrar los terrenos vendidos a un precio mayor de 35000
select terreno.id,contrato.monto
from terreno,contrato
where terreno.id_contrato=contrato.id and contrato.monto>35000


 select users.name,vende.id_lote
from users,vende
where users.id=vende.id_user and vende.id_lote in (select terreno.id from terreno where estado_terreno='ocupado')
----12--mostrar el valor y el estado de todos los terrenos

select terreno.id,terreno.id_manzana,terreno.precio,terreno.estado_terreno
from terreno

create proc insertar_users_nuevo(
@iduser integer,
@name  varchar(255),
@carnet varchar(255),
@email varchar(255),
@password varchar(255),
@tipo_vendedor int,
@tipo_visita int ,
@tipo_cliente int,
@tipo_administrador int, 
@idtelefono int,
@telefono int
)
as 
begin 
insert into users (id,name,carnet,email,password,tipo_vendedor,tipo_visita,tipo_cliente,tipo_administrador)
values(@iduser,@name,@carnet,@email,@password,@tipo_vendedor,@tipo_visita,@tipo_cliente,@tipo_administrador)
insert into telefono_persona(id,id_users,telefono)
values (@idtelefono,@iduser,@telefono)
end

create proc insertar_contrato(
 @id  integer,
 @fecha_adjudicacion  date,
 @monto  float ,
 @id_user integer ,
 @codigo_pago integer 
)as 
begin
insert into contrato(id,fecha_adjudicacion,monto,id_user,codigo_pago)
values (@id,@fecha_adjudicacion,@monto,@id_user,@codigo_pago)
end

create proc insertar_credito(
@id  integer,
@cuota_inicial  float,
@plazo  integer ,
@interes_anual  float,
@cuota_mensual  float ,
@fecha_prog  varchar(255),
@fecha_inicio  date ,
@fecha_ultima_cuota  date ,
@estado  varchar (255) ,
@saldo_financiado float,
@pago_id  integer 
)as
begin 
insert into credito(id,cuota_inicial,plazo,interes_anual,cuota_mensual,fecha_prog,fecha_inicio,fecha_ultima_cuota,estado,saldo_financiado,pago_id)
values (@id,@cuota_inicial,@plazo,@interes_anual,@cuota_mensual,@fecha_prog,@fecha_inicio,@fecha_ultima_cuota,@estado,@saldo_financiado,@pago_id)
end


create proc insertar_cuota(
@id  integer    ,
 @id_credito  integer    ,
 @id_mora  integer    ,
 @amortizacion  float  ,
 @monto_cuota  int 
)as 
begin
insert into cuota(id,id_credito,id_mora,amortizacion,monto_cuota)
values (@id,@id_credito,@id_mora,@amortizacion,@monto_cuota)
end