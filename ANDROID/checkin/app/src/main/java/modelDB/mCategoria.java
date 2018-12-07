package modelDB;

/**
 * Created by User on 11/10/2017.
 */

public class mCategoria {
    public mCategoria(String categoriaID, String descricao) {
        this.categoriaID = categoriaID;
        this.descricao = descricao;
    }

    private String categoriaID;
    private String descricao;

    public String getCategoriaID() {
        return categoriaID;
    }

    public void setCategoriaID(String categoriaID) {
        this.categoriaID = categoriaID;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }
}
