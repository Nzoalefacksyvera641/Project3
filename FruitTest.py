from sklearn import tree
import numpy as np
#Feature: [weight in grams, size in cm]
#Labels: 0=Apple, 1=orange
features = [[14,5], [150,5.5], [130,4.8], [160,6], [170,6.2], [180,6.5]]
labels = [0,0,0,1,1,1]
model = tree.DecisionTreeClassifier
model.fit(features,labels)
new_fruits = [[155, 5.7]]
prediction = model.predict(new_fruit)
if prediction[0] ==0:
  print("The fruit is an apple")
  else:
    print("The fruit is an orange")
    test_fruits=[[145,5.2], [175,6.3]]
    test_labels = [0,1]
    predictions = modelpredict(test_fruits)
    #Check accuracy
    correct = 0
    for i in range(len(test_labels)):
      if predictions[i] == test_labels[i]
      correct += 1
      print(f"Accuracy:{correct/len(test_labels) * 100}%")