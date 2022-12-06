CREATE TABLE IF NOT EXISTS helpdesk.empleados (
id_empleado int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS helpdesk.ventas (
id_venta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS clientes (
id_clientes int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(30) NOT NULL,
a_paterno VARCHAR(30) NOT NULL,
a_materno VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS helpdesk.incidentes(
id_incidente int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nivel_prioridad int(1) NULL,
tipo_problema varchar(25) NOT NULL,
proceso_solucion text NULL,
solucion text NULL);

CREATE TABLE IF NOT EXISTS helpdesk.tickets(
folio int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
fecha_creacion datetime DEFAULT current_timestamp,
id_empleado int(5) NULL,
id_cliente int(5) NOT NULL,
id_incidente int(5) NOT NULL,
id_venta int(5) NOT NULL,
nombre_producto varchar(50) NOT NULL,
descripcion text NOT NULL,
imagen varchaR(100) NULL,
estatus boolean NOT NULL,
fecha_edicion datetime DEFAULT current_timestamp,
fecha_solucion datetime NULL,
foreign key (id_empleado) REFERENCES empleados(id_empleado) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_venta) REFERENCES ventas(id_venta) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_cliente) REFERENCES clientes(id_clientes) ON DELETE RESTRICT ON UPDATE CASCADE,
foreign key (id_incidente) REFERENCES incidentes(id_incidente) ON DELETE RESTRICT ON UPDATE CASCADE);

CREATE TABLE IF NOT EXISTS helpdesk.correos(
correo VARCHAR(40) NOT NULL,
id_cliente int(5) NOT NULL,
foreign key (id_cliente) REFERENCES clientes(id_clientes) ON DELETE RESTRICT ON UPDATE CASCADE);

CREATE TABLE IF NOT EXISTS helpdesk.telefonos(
tel varchar(14) NOT NULL,
id_cliente int(5) NOT NULL,
foreign key (id_cliente) REFERENCES clientes(id_clientes) ON DELETE RESTRICT ON UPDATE CASCADE);