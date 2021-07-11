package Examenes.PrimerParcial.G_R_1_2019.Lista;

import ADT_Lista.*;

/**
 *
 * @author Ronaldo Rivero
 */
public class ListaS {
    private NodoS L;
    private int n;
    
    /**
     * Constructor de una Lista vacía
     */
    public ListaS() {
        L = null;
        n = 0;
    }
    
    /**
     * Inserta el elemento X en la lista de manera ordenada con
     * el criterio ascendente
     * @param x int
     */
    public void insertar(int x) {
        if(L == null) {
            L = new NodoS(x);
            n = 1;
        } else {
            NodoS azul = L;
            //azul avanza siempre y cuando, no sea null su enlace(siguiente) o
            // y X >= a el dato del dato del enlace >= para detectar al igual            
            while(azul.getEnlace() != null && x >= azul.getEnlace().getDato()) {               
                azul = azul.getEnlace();
                //Si X ya esta en la lista, no lo inserta (return)
                if(azul.getDato() == x) {
                    System.err.println("No se pudo introducir "+x+" debido a que ya existe");
                    return;
                }
            }
            
            //X se debe insertar adelante, siempre que sea menor a azul.getDato()
            //por lo tanto no acepta repetido, si desea que acepte debe ser <=
            if(x < azul.getDato()) {
                //insertar adelante
                NodoS aux = new NodoS(x);
                aux.setEnlace(L);
                L = aux;
            } else if(azul.getEnlace() == null) {
                //insertar al final
                NodoS aux = new NodoS(x);
                azul.setEnlace(aux);    
            } else if(x > azul.getDato()) {
                //insertar al medio
                NodoS aux = new NodoS(x);
                aux.setEnlace(azul.getEnlace());
                azul.setEnlace(aux);
            }
            n = n + 1;
        }
    }
    
    /**
     * Este metodo elimina el nodo de la posicion enviada
     * si la posicion esta fuera de rango, no realiza nada
     * @param pos int
     */
    public void eliminar(int pos) {
        if( !posicionValida(pos)) {            
            return;
        }
        NodoS verde = null;
        NodoS rojo = L;
        int i = 1;
        while( i != pos) {
            verde = rojo;
            rojo = rojo.getEnlace();
            i = i + 1;
        }
        
        //c3 el nodo a eliminar esta de primero
        if(verde == null) {
            L = L.getEnlace();           
        } else{0
            //c1 = c2 el nodo a eliminar esta al final        
            //c1 el nodo a eliminar esta al medio
            verde.setEnlace( rojo.getEnlace() );
        }
        n--;            
    }
    
    /**
     * Esta funcion devuelve el dato del nodo en la posicion,
     * en caso la posicion enviada no este dentro del rango valido
     * se retornara -1
     * @param pos int
     * @return 
     */
    public int get(int pos) {
        if( !posicionValida(pos)) {
            return -1;
        }        
        NodoS rojo = L;
        int i = 1;
        while( i != pos) {            
            rojo = rojo.getEnlace();
            i = i + 1;
        }        
        return rojo.getDato();
    }
    
    public boolean existe(int x) {
        NodoS rojo = L;        
        while( rojo != null) {            
            if(rojo.getDato() == x)
                return true;
            rojo = rojo.getEnlace();            
        }        
        return false;
    }
    
    public int longitud() {
        return n;
    }
    
    private boolean posicionValida(int pos) {
        if( !(pos >=1 && pos <=n)) {
            System.err.println("La posicion esta fuera de rango");
            return false;
        }   
        return true;
    }
    
    public void empilar(int x) {
        if(L == null) {
            L = new NodoS(x);
            n = 1;
        } else {
            NodoS azul = L;   
            while(azul.getEnlace() != null) {               
                azul = azul.getEnlace();
            }
            NodoS aux = new NodoS(x);
            azul.setEnlace(aux);
            n = n + 1;
        }
    }
    
    public int desempilar() {
        if(L == null)
            return -1;
        NodoS verde = null;
        NodoS rojo = L;   
        while(rojo.getEnlace() != null) {               
            verde = rojo;
            rojo = rojo.getEnlace();
        }
        int dato;
        if(verde == null) {
            dato = L.getDato();
            L = null;            
        } else {
            dato = rojo.getDato();
            verde.setEnlace( null );
        }        
        n = n - 1;
        return dato;
    }
    
    public int cantNodoPares() {
        if( L == null)
            return 0;
        int c = 0;
        NodoS rojo = L;
        while(rojo != null) {
            if(rojo.getDato() % 2 == 0)
                c = c + 1;
            rojo = rojo.getEnlace();
        }
        return c;
    }
    
    public int sumaNodoImpares() {
        if( L == null )
            return 0;
        int sum = 0;
        NodoS rojo = L;
        while(rojo != null) {
            if(rojo.getDato() % 2 == 1)
                sum = sum + rojo.getDato();
            rojo = rojo.getEnlace();
        }
        return sum;
    }
    
    public int cantNodoImpares() {
        return cantNodoImpares(L);
    }
    
    private int cantNodoImpares(NodoS p) {
        if(p == null)
            return 0;
        if(p.getEnlace() == null) {
            if(p.getDato() % 2 == 1)
                return 1;
        }
        int c = cantNodoImpares(p.getEnlace());
        if(p.getDato() % 2 == 1)
            return c+1;
        return c;            
    }
    
    public int sumaNodoPares() {
        return sumaNodoPares(L);
    }
    
    private int sumaNodoPares(NodoS p) {
        if(p == null)
            return 0;
        if(p.getEnlace() == null) {
            if(p.getDato() % 2 == 0)
                return p.getDato();
        }
        int c = sumaNodoPares(p.getEnlace());
        if(p.getDato() % 2 == 0)
            return c + p.getDato();
        return c;            
    }
    
    /**
     * Imprimir la Lista
     * @return 
     */
    @Override
    public String toString() {
        String s = "[";
        NodoS aux = L;
        while(aux != null) {
            s = s + aux.getDato() + " | ";
            aux = aux.getEnlace();
        }
        return s + "]";
    }
}
