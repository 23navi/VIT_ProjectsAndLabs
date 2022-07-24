package com.example.sic;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class News10 extends AppCompatActivity {
    public void tonews1(View view)
    {
        Button button =  findViewById(R.id.check);
        Intent intent = new Intent(this,News1.class);
        startActivity(intent);
    }
    public void backnews9(View view)
    {
        Button button =  findViewById(R.id.check);
        Intent intent = new Intent(this,News9.class);
        startActivity(intent);
    }
    public void alert10(View view)
    {
        AlertDialog.Builder builder
                = new AlertDialog
                .Builder(News10.this);
        builder.setMessage("This news is marked FALSE");
        builder.setTitle("PREDICTION!");
        builder.setCancelable(false);
        builder
                .setNegativeButton(
                        "OK",
                        new DialogInterface
                                .OnClickListener() {

                            @Override
                            public void onClick(DialogInterface dialog,
                                                int which)
                            {

                            }
                        });

        // Create the Alert dialog
        AlertDialog alertDialog = builder.create();

        // Show the Alert Dialog box
        alertDialog.show();
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_news10);
    }
}