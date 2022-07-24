

import pandas as pd
import json




# add file name with location
df= pd.read_csv("Downloads/train.csv")





column_names= df.columns.to_list()





column_names=column_names[1:]




print(df[column_names[0]].count())
df=df.dropna()
rows=df[column_names[0]].count()
print(rows)
#rows before null removal and after removal
rows=200 # hardcoding it make the json small... remove in production code




for colName in column_names:
    df[colName] = df[colName].map(str)





arr=[]
for row in range(rows):
    forZip=[]
    for colName in column_names:
        forZip.append(df.iloc[row][colName])
    arr.append({k:v for (k,v) in zip(column_names,forZip)})
    #print(f"{row} done")





arr[0][column_names[0]]




#change the save destination
with open("Downloads/data.json", "w") as file:
    json.dump(arr, file)





