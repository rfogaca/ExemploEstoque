
import java.io.*;
import java.text.*;
import java.util.Vector;

class Estoque {

    public Estoque(String nome, int numero) {
        produtos = new Vector(numero);
        vendas = new Vector(numero);
        nomeEmpresa = nome;
    }

    ;

    public void adicionaProduto(Produto produtoEntrada) {
        produtos.add(produtoEntrada);
    }

    ;

    public void adicionaVenda(Venda vendaEntrada) {
        vendas.add(vendaEntrada);
    }

    ;

    public void imprimeProdutos() {
        int i;
        System.out.print(nomeEmpresa + " : Produtos ");
        for (i = 0; i < produtos.size(); i++) {
            Produto objetoProduto = (Produto) produtos.get(i);
            objetoProduto.imprimeProduto();
        }
        System.out.print("");
    }

    ;

    public void imprimeVendas() {
        int i;
        System.out.print(nomeEmpresa + " : Vendas");
        for (i = 0; i < vendas.size(); i++) {
            Venda objetoVenda = (Venda) vendas.get(i);
            objetoVenda.imprimeVenda();
        }
    }
    ;


     private final Vector produtos;
    private final Vector vendas;
    private final String nomeEmpresa;
};

class Produto {

    public Produto(int codigoProduto, String nomeProduto, String unidadeProduto, float valorProduto) {
        codigo = codigoProduto;
        nome = nomeProduto;
        unidade = unidadeProduto;
        valor = valorProduto;
    }

    public void imprimeProduto() {
        System.out.print("Nome Produto: " + nome);
        System.out.print("Codigo Produto:" + codigo);
        System.out.print("Unidade:" + unidade);
        System.out.print("Preco:" + valor);
    }

    private final int codigo;
    private final String nome;
    private final String unidade;
    private final float valor;
};

class Venda {

    public Venda(int codigoVenda, String dataVenda, String horaVenda) {
        codigo = codigoVenda;
        data = dataVenda;
        hora = horaVenda;
        valor = 0;
    }

    public void imprimeVenda() {
        System.out.print("Venda em: " + data);
        System.out.print("Hora:" + hora);
        System.out.print("Valor total:" + valor);
    }

    private final int codigo;
    private final String data;
    private final String hora;
    private final float valor;
};

class itensVenda {

    public itensVenda(String dataItem, int itemVenda, int quantidadeItem, String vendaItem) {
        data = dataItem;
        item = itemVenda;
        quantidade = quantidadeItem;
        venda = vendaItem;

    }

    private final String data;
    private final int item;
    private final int quantidade;
    private final String venda;
};

class EstoqueAplicacao {

    public static String le_string() {
        String s = "";
        try {
            InputStreamReader isr = new InputStreamReader(System.in);
            BufferedReader br = new BufferedReader(isr);
            s = br.readLine();
        } catch (IOException e) {
            s = "";
        }
        return s;
    }

    public static float le_float() {
        String s = "";
        float f = 0;
        try {
            InputStreamReader isr = new InputStreamReader(System.in);
            BufferedReader br = new BufferedReader(isr);
            s = br.readLine();
            DecimalFormat df = new DecimalFormat();
            Number n = df.parse(s);
            f = n.floatValue();
        } catch (IOException | ParseException e) {
            f = 0;
        }
        return f;
    }

    public static int le_int() {
        String s = "";
        int i = 0;
        try {
            InputStreamReader isr = new InputStreamReader(System.in);
            BufferedReader br = new BufferedReader(isr);
            s = br.readLine();
            DecimalFormat df = new DecimalFormat();
            Number n = df.parse(s);
            i = n.intValue();
        } catch (IOException | ParseException e) {
            i = 0;
        }
        return i;
    }

    public static void main(String[] args) {
        String nome, unidade, data, hora;
        int opcao, capacidade, codigo;
        float valor;

        opcao = 1;
        System.out.print("Entre com o nome da empresa....");
        nome = le_string();
        System.out.print("Entre com a capacidade dos vetores....");
        capacidade = le_int();

        Estoque estoque = new Estoque(nome, capacidade);

        while (opcao != 0) {
            System.out.print("Escolha a sua opcao");
            System.out.print("   1) Insere produto");
            System.out.print("   2) Imprime produto");
            System.out.print("   3) Insere venda");
            System.out.print("   4) Imprime venda");
            System.out.print("   0) Sai");
            System.out.print("Sua escolha ? ");
            opcao = le_int();
            switch (opcao) {
                case 1:
                    System.out.print("Entre com o nome do produto: ");
                    nome = le_string();
                    System.out.print("Entre com o codigo do produto: ");
                    codigo = le_int();
                    System.out.print("Entre com a unidade do produto: ");
                    unidade = le_string();
                    System.out.print("Entre com valor do produto: ");
                    valor = le_float();
                    estoque.adicionaProduto(new Produto(codigo, nome, unidade, valor));
                    break;
                case 2:
                    estoque.imprimeProdutos();
                    break;
                case 3:
                    System.out.print("Entre com o codigo da venda: ");
                    codigo = le_int();
                    System.out.print("Entre com a data da venda: ");
                    data = le_string();
                    System.out.print("Entre com a hora da venda: ");
                    hora = le_string();
                    estoque.adicionaVenda(new Venda(codigo, data, hora));
                    break;
                case 4:
                    estoque.imprimeVendas();
                    break;
            }
        }
    }
}
