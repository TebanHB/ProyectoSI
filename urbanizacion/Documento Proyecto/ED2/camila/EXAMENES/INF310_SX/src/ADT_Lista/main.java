/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ADT_Lista;

/**
 *
 * @author Ronaldo Rivero
 */
public class main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        ListaS lista = new ListaS();
        lista.insertar(50);
        lista.insertar(30);
        lista.insertar(15);
        lista.insertar(60);
        lista.insertar(35);
        System.out.println(lista);
        lista.eliminar(3);
        lista.eliminar(15);
        System.out.println(lista);
        System.out.println("Lista(3) = " + lista.get(3));
        System.out.println("Lista(15) = " + lista.get(15));
        lista.empilar(1);
        System.out.println(lista);
        System.out.println("Desempilar = " + lista.desempilar());
        System.out.println(lista);
        System.out.println("Cantidad de Nodos Pares = "+ lista.cantNodoPares());
        System.out.println("Sumatoria de Nodos Impares = "+ lista.sumaNodoImpares());        
        System.out.println("Cantidad de Nodos Impares = "+ lista.cantNodoImpares());
        System.out.println("Sumatoria de Nodos Pares = "+ lista.sumaNodoPares());
    }
    
}
