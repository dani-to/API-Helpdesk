CREATE TABLE IF NOT EXISTS empleados (
id_empleado int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
)

CREATE TABLE IF NOT EXISTS venta (
id_venta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
)

CREATE TABLE IF NOT EXISTS clientes (
id_clientes int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(30) NOT NULL,
a_paterno VARCHAR(30) NOT NULL,
a_materno VARCHAR(30) NOT NULL,
estatus boolean NOT NULL
)

CREATE TABLE IF NOT EXISTS ticket(
folio int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
fecha_creacion datetime DEFAULT current_timestamp,
id_empleado int(5) NULL,
id_cliente int(5) NOT NULL,
id_incidente int(5) NOT NULL,
id_ticket_compra int(5) NOT NULL,
descripcion text NOT NULL,
imagen varchaR(100) NULL,
fecha_edicion datetime DEFAULT current_timestamp,
fecha_solucion datetime NULL,
foreign key (id_empleado) REFERENCES empleado(id_empleado) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_ticket_compra) REFERENCES venta(id_ticket_compra) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_cliente) REFERENCES clientes(id_clientes) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_incidente) REFERENCES incidente(id_incidente) ON DELETE RESTRICT ON UPDATE CASCADE)

CREATE TABLE IF NOT EXISTS incidente(
id_incidente int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nivel_prioridad int(1) NOT NULL,
tipo_problema varchar(25) NOT NULL,
solucion text NULL)

CREATE TABLE IF NOT EXISTS contacto(
tel varchar(14) NOT NULL,
correo VARCHAR(40) NOT NULL,
id_cliente int(5) NOT NULL
foreign key (id_cliente) REFERENCES clientes(id_clientes) ON DELETE RESTRICT ON UPDATE CASCADE)