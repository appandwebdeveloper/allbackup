package e.com.custombutton;

import android.content.res.ColorStateList;
import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {
CustomButtonView customButtonView;
ColorStateList colorStateList;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        customButtonView=findViewById(R.id.lll);

        customButtonView.setColorStateList(colorStateList.getColorForState(customButtonView.getDrawableState(),Color.GRAY));
    }
}
