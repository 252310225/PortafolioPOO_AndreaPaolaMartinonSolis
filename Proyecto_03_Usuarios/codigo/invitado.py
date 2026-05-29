from usuario import Usuario

class Invitado(Usuario):
    def acceso_sistema(self): # Sobrescritura 
        print("Acceso limitado. Solo puedes ver el catálogo público.")