package teste;

public class Teste {
    public static void main(String args[]) {
      Loja loja1 = new Loja(3);
      Loja loja2= new Loja(4.6);
      int i = loja2.getValorMais(5);
      double d = loja1.getValorMais(2.4);
      System.out.println(i + " " + d);
    }
  }
  class Loja {
    int valor;
    static int num_vend=2;
    
    public Loja(int val) { valor = val; }
    public Loja(double val) { valor = (int)val; }

    public int getValorMais(int mais) {
      num_vend=8;
      return (valor + mais);
    }
    public double getValorMais(double mais) {
      return (mais+valor+num_vend);
    }
}
