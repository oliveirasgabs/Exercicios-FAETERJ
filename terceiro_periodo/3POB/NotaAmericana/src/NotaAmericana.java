public class NotaAmericana {
  private int notaPercent = 0;

  public void setPercentual (int percent){
      if (percent >= 0 && percent <= 100){
          this.notaPercent = percent;
      }
      else{
          notaPercent = 0;
      }
  }

  public char getGrau (){
      char notaAlfabetica;
      if (notaPercent >= 90 && notaPercent <= 100){
          notaAlfabetica = 'A';
      } else if (notaPercent >= 80 && notaPercent <= 89){
          notaAlfabetica = 'B';
      } else if (notaPercent >= 70 && notaPercent <= 79){
          notaAlfabetica = 'C';
      } else if (notaPercent >= 60 && notaPercent <= 69){
          notaAlfabetica = 'D';
      } else {
          notaAlfabetica = 'F';
      }
      return notaAlfabetica;
  }

  public double getNotaBrasileira (){
      double notaBr = notaPercent/10;
      return notaBr;
  }

  public static void main(String[] args) {
      NotaAmericana nota;
      nota = new NotaAmericana();
      nota.setPercentual(70);
      System.out.println(nota.getGrau()); 
      System.out.println(nota.getNotaBrasileira());
  }
}
