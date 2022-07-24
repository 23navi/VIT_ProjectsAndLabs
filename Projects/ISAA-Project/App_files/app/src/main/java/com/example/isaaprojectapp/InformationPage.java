package com.example.isaaprojectapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class InformationPage extends AppCompatActivity {
    public void tolist(View view)
    {
        Button button =  findViewById(R.id.hidebutton);
        Intent intent = new Intent(this,ListPage.class);
        startActivity(intent);
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_information_page);
    }
}