package e.com.custombutton;

import android.content.Context;
import android.content.res.ColorStateList;
import android.content.res.TypedArray;
import android.graphics.Color;
import android.support.annotation.Nullable;
import android.support.annotation.RequiresApi;
import android.util.AttributeSet;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;

import e.com.custombutton.R;

public class CustomButtonView extends LinearLayout {
    private Button mSignatureButton;
    private View mSignatureLinearLayout;
    ColorStateList colorStateList;
    private ImageView mStatusImageView;

    public CustomButtonView(Context paramContext) {
        super(paramContext);
        init(paramContext, null);
    }

    public CustomButtonView(Context paramContext, @Nullable AttributeSet paramAttributeSet) {
        super(paramContext, paramAttributeSet);
        init(paramContext, paramAttributeSet);
    }

    public CustomButtonView(Context paramContext, @Nullable AttributeSet paramAttributeSet, int paramInt) {
        super(paramContext, paramAttributeSet, paramInt);
        init(paramContext, paramAttributeSet);
    }

    @RequiresApi(api = 21)
    public CustomButtonView(Context paramContext, AttributeSet paramAttributeSet, int paramInt1, int paramInt2) {
        super(paramContext, paramAttributeSet, paramInt1, paramInt2);
        init(paramContext, paramAttributeSet);
    }

    private void init(Context paramContext, AttributeSet paramAttributeSet) {
        LayoutInflater.from(paramContext).inflate(R.layout.widget_custom_button, this);
        mSignatureLinearLayout = findViewById(R.id.linearLayout);
        mStatusImageView = ((ImageView) findViewById(R.id.imageView));
        mSignatureButton = ((Button) findViewById(R.id.button));
        if (paramAttributeSet == null)
            return;

        TypedArray paramAttribute = paramContext.obtainStyledAttributes(paramAttributeSet, R.styleable.CustomButtonView);
        mSignatureLinearLayout.setBackground(paramAttribute.getDrawable(R.styleable.CustomButtonView_setViewBackground));
        mSignatureButton.setText(paramAttribute.getText(R.styleable.CustomButtonView_setButtonText));
        mSignatureButton.setTextColor(paramAttribute.getColor(R.styleable.CustomButtonView_setButtonTextColor, Color.RED));
        mStatusImageView.setImageDrawable(paramAttribute.getDrawable(R.styleable.CustomButtonView_setImage));
        paramAttribute.recycle();
    }

    public void setButtonText(String paramString) {
        mSignatureButton.setText(paramString);
    }

    public void setStatusImageView(int paramInt) {
        mStatusImageView.setImageResource(paramInt);
       int color= colorStateList.getColorForState(getDrawableState(),Color.GRAY);
    }
    public void setColorStateList(int colorStateList){
        mSignatureLinearLayout.setBackgroundColor(colorStateList);
    }

    public int[] getSignatureLinearLayout() {
        return mSignatureLinearLayout.getDrawableState();
    }
}