package database;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by User on 19/09/2017.
 */

public class DadosOpenHelper extends SQLiteOpenHelper{
    public DadosOpenHelper(Context context) {
        super(context, "CHECKINDB", null, 1);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {

        db.execSQL( ScriptDLL.getCreateTableUsuario() );
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int oldVersion, int newVersion) {

    }
}
