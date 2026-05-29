from usuario import Usuario

class Cliente(Usuario):
    def __init__(self, nombre, email, puntos):
        super().__init__(nombre, email)
        self.puntos = puntos #Agregar puntos

    def acceso_sistema(self):#Sobrescritura
        print(f"Acceso a la tienda. Tienes {self.puntos} puntos acumulados.")