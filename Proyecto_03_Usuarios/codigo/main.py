from admin import Admin
from cliente import Cliente
from invitado import Invitado

# Usuarios con sus datos completos
u1 = Admin("Andrea Solis", "252310225@itslerdo.edu.mx", "Administrador")
u2 = Cliente("Ashli Marrero", "252310623@itslerdo.edu.mx", 1567)
u3 = Invitado("Nicólas Garcia", "visitante@gmail.com")

# Lista
usuarios = [u1, u2, u3]

#Menú interactivo 
def ejecutar():
    while True:
        print("\n--- MENÚ DE USUARIOS ---")
        print("1. Ver lista de usuarios")
        print("2. Salir")
        
        op = input("Selecciona una opción: ")
        
        if op == "1":
            print("\n" + "="*30)
            for u in usuarios:
                u.saludar()
                u.mostrar_datos()
                u.acceso_sistema() #Polimorfismo 
                print("-" * 30)
        elif op == "2":
            print("Saliendo...")
            break
        else:
            print("Opción no válida.")

if __name__ == "__main__":
    ejecutar()