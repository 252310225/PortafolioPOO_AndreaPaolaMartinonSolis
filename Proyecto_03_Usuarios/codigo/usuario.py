class Usuario:
    def __init__(self, nombre, email):
        self.nombre = nombre
        self.email = email

    def saludar(self):
        print(f"Hola {self.nombre}. ¡Bienvenido!")

    def mostrar_datos(self):
        print(f"Nombre: {self.nombre} | Email: {self.email}")

    def acceso_sistema(self):
        print("Acceso básico al sistema.")