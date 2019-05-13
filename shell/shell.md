### 192统计词频
===
```$shell
cat words.txt | tr -s ' ' '\n' | sort | uniq -c | sort -rn | awk '{print $2, $1}'
``` 
### 193有效电话号码
===
```$shell
grep -P '^(\d{3}-|\(\d{3}\) )\d{3}-\d{4}$' file.txt

```
### 194转置文件
===
```$shell
awk '{ for(i=1;i<=NF;i++){ if(NR==1){ arr[i]=$i; }else{ arr[i]=arr[i]" "$i; } } } END{ for(i=1;i<=NF;i++){ print arr[i]; } }'  file.txt
```
### 195第十行
===
```$shell
awk "NR==10" file.txt
```