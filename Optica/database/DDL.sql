create table opticas(
    idOptica INT AUTO_INCREMENT NOT NULL,
    nombreOptica VARCHAR(25) NOT NULL,
    direccionOptica VARCHAR(50) NOT NULL,
    idUsuario INT NOT NULL,
    idPaciente INT NOT NULL,
    PRIMARY KEY(idOptica)
)

create table pacientes(
    idPaciente INT AUTO_INCREMENT NOT NULL,
    identificacionPaciente VARCHAR(25) NOT NULL,
    nomresPaciente VARCHAR(50) NOT NULL,
    apellidoPaciente VARCHAR(25) NOT NULL,
    fechaNacimientoPaciente DATE NOT NULL,
    direccionPaciente VARCHAR(100) NOT NULL,
    correoPaciente VARCHAR(50) NOT NULL,
    idCiudad INT NOT NULL,
    PRIMARY KEY(idPaciente)
)

create table ciudades(
    idCiudad INT AUTO_INCREMENT NOT NULL,
    nombreCiudad VARCHAR(50) NOT NULL,
    PRIMARY KEY(idCiudad)
)

create table citas(
    idCita INT AUTO_INCREMENT NOT NULL,
    fechaCita DATE NOT NULL,
    idPaciente INT NOT NULL,
    PRIMARY KEY(idCita)
)
create table usuarios(
    idUsuario INT AUTO_INCREMENT NOT NULL,
    nombreUsuario VARCHAR(50)  NOT NULL,
    contraseñaUsuario VARCHAR(25) NOT NULL,
    PRIMARY KEY(idUsuario)
)
create table proveedores_opticas(
    idProveedor INT NOT NULL,
    idOptica INT NOT NULL,
    PRIMARY KEY(idProveedor, idOptica)
)
create table proveedores(
    idProveedor INT AUTO_INCREMENT NOT NULL,
    nombreProveedor VARCHAR(50) NOT NULL,
    telefonoProveedor VARCHAR(10) NOT NULL,
    coreoProveedor VARCHAR(50) NOT NULL,
    PRIMARY KEY(idProveedor)
)

create table productos(
    idProducto INT AUTO_INCREMENT NOT NULL,
    codigoProducto INT NOT NULL,
    nombreProducto VARCHAR(50) NOT NULL,
    descripcionProducto VARCHAR(100) NOT NULL,
    precioProducto INT NOT NULL,
    existenciasProducto INT NOT NULL,
    idProveedor INT NOT NULL,
    PRIMARY KEY(idProducto)
)

ALTER TABLE opticas ADD CONSTRAINT FK_OPTICAS_PACIENTES
FOREIGN KEY (idPaciente) REFERENCES pacientes (idPaciente)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE opticas ADD CONSTRAINT FK_OPTICAS_USUARIOS
FOREIGN KEY (idUsuario REFERENCES usuarios (idUsuario)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE proveedores_opticas ADD CONSTRAINT FK_PROVEEDORES_OPTICAS_OPTICAS
FOREIGN KEY (idOptica) REFERENCES opticas (idOptica)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE proveedores_opticas ADD CONSTRAINT FK_PROVEEDORES_OPTICAS_PROVEEDORES
FOREIGN KEY (idProveedor) REFERENCES proveedores (idProveedor)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE productos ADD CONSTRAINT FK_PRODUCTOS_PROVEEDORES
FOREIGN KEY (idProveedor) REFERENCES proveedores (idProveedor)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE pacientes ADD CONSTRAINT FK_PACIENTES_CIUDADES
FOREIGN KEY (idCiudad) REFERENCES ciudades (idCiudad)
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE citas ADD CONSTRAINT FK_CITAS_PACIENTES
FOREIGN KEY (idPaciente) REFERENCES pacientes (idPaciente)
ON DELETE RESTRICT ON UPDATE CASCADE; 