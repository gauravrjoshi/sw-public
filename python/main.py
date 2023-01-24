from typing import Union

from fastapi import FastAPI

import cv2
import numpy as np
import matplotlib.pyplot as plt
import base64


app = FastAPI()


@app.get("/")
def read_root():




   
    
    return {"objects_in_the_image : ": "x"}


@app.post("/objects_in_the_image/")
def read_item(img: str):

    with open("imageToSave.jpg", "wb") as fh:
        fh.write(base64.urlsafe_b64decode(img))         
    
    image = cv2.imread('imageToSave.jpg')

    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

    blur = cv2.GaussianBlur(gray, (11, 11), 0)
    canny = cv2.Canny(blur, 30, 150, 3)
    dilated = cv2.dilate(canny, (1, 1), iterations=0)

    (cnt, hierarchy) = cv2.findContours(
        dilated.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_NONE)
    rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
    cv2.drawContours(rgb, cnt, -1, (0, 255, 0), 2)
    return {"objects_in_the_image": len(cnt)}
# python -m uvicorn main:app --reload
