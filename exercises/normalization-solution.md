# Normalization Exercise

## Exercise 1

### Problem

| UnitID | StudentID | Date     | TutorID | Topic | Room | Grade | Book      | TutEmail     |
| ------ | --------- | -------- | ------- | ----- | ---- | ----- | --------- | ------------ |
| U1     | St1       | 23.02.03 | Tut1    | GMT   | 629  | 4.7   | Deumlich  | tut1@fhbb.ch |
| U2     | St1       | 18.11.02 | Tut3    | GIn   | 631  | 5.1   | Zehnder   | tut3@fhbb.ch |
| U1     | St4       | 23.02.03 | Tut1    | GMT   | 629  | 4.3   | Deumlich  | tut1@fhbb.ch |
| U5     | St2       | 05.05.03 | Tut3    | PhF   | 632  | 4.9   | Dümmlers  | tut3@fhbb.ch |
| U4     | St2       | 04.07.03 | Tut5    | AVQ   | 621  | 5.0   | SwissTopo | tut5@fhbb.ch |

### Solution

| UnitID | StudentID | Grade |
| ------ | --------- | ----- |
| U1     | St1       | 4.7   |
| U2     | St1       | 5.1   |
| U1     | St4       | 4.3   |
| U5     | St2       | 4.9   |
| U4     | St2       | 5.0   |

| UnitID | TutorID | Room | Date     |
| ------ | ------- | ---- | -------- |
| U1     | Tut1    | 629  | 23.02.03 |
| U2     | Tut3    | 631  | 18.11.02 |
| U1     | Tut1    | 629  | 23.02.03 |
| U5     | Tut3    | 632  | 05.05.03 |
| U4     | Tut5    | 621  | 04.07.03 |

| UnitID | Topic |
| ------ | ----- |
| U1     | GMT   |
| U2     | GIn   |
| U5     | PhF   |
| U4     | AVQ   |

| Topic | Book      |
| ----- | --------- |
| GMT   | Deumlich  |
| GIn   | Zehnder   |
| PhF   | Dümmlers  |
| AVQ   | SwissTopo |

| TutorID | TutEmail     |
| ------- | ------------ |
| Tut1    | tut1@fhbb.ch |
| Tut3    | tut3@fhbb.ch |
| Tut5    | tut5@fhbb.ch |

## Exercise 2

### Problem

| EMPLOYEE_ID | NAME  | JOB_CODE | JOB       | STATE_CODE | HOME_STATE |
| ----------- | ----- | -------- | --------- | ---------- | ---------- |
| E001        | Alice | J01      | Chef      | 26         | Michigan   |
| E001        | Alice | J02      | Waiter    | 26         | Michigan   |
| E002        | Bob   | J02      | Waiter    | 56         | Wyoming    |
| E002        | Bob   | J03      | Bartender | 56         | Wyoming    |
| E003        | Alice | J01      | Chef      | 56         | Wyoming    |

### Solution

| EMPLOYEE_ID | JOB_CODE |
| ----------- | -------- |
| E001        | J01      |
| E001        | J02      |
| E002        | J02      |
| E002        | J03      |
| E003        | J01      |

| JOB_CODE | JOB       |
| -------- | --------- |
| J01      | Chef      |
| J02      | Waiter    |
| J03      | Bartender |

| EMPLOYEE_ID | NAME  | STATE_CODE |
| ----------- | ----- | ---------- |
| E001        | Alice | 26         |
| E002        | Bob   | 56         |
| E003        | Alice | 56         |

| STATE_CODE | HOME_STATE |
| ---------- | ---------- |
| 26         | Michigan   |
| 56         | Wyoming    |

## Exercise 3

### Problem

| Book                                  | Genre                   | Author              | Nationality |
| ------------------------------------- | ----------------------- | ------------------- | ----------- |
| Twenty Thousand Leagues Under the Sea | Science Fiction         | Jules Verne         | French      |
| Journey to the Center of the Earth    | Science Fiction         | Jules Verne         | French      |
| Leaves of Grass.                      | Poetry                  | Walt Whitman        | American    |
| Anna Karenina.                        | Literary                | Fiction Leo Tolstoy | Russian     |
| A Confession                          | Religious Autobiography | Leo Tolstoy         | Russian     |

### Solution

| Book                                  | Author              |
| ------------------------------------- | ------------------- |
| Twenty Thousand Leagues Under the Sea | Jules Verne         |
| Journey to the Center of the Earth    | Jules Verne         |
| Leaves of Grass.                      | Walt Whitman        |
| Anna Karenina.                        | Fiction Leo Tolstoy |
| A Confession                          | Leo Tolstoy         |

| Book                                  | Genre                   |
| ------------------------------------- | ----------------------- |
| Twenty Thousand Leagues Under the Sea | Science Fiction         |
| Journey to the Center of the Earth    | Science Fiction         |
| Leaves of Grass.                      | Poetry                  |
| Anna Karenina.                        | Literary                |
| A Confession                          | Religious Autobiography |

| Author              | Nationality |
| ------------------- | ----------- |
| Jules Verne         | French      |
| Walt Whitman        | American    |
| Fiction Leo Tolstoy | Russian     |
| Leo Tolstoy         | Russian     |

## Exercise 4

### Problem

[Source](https://www.javaguicodexample.com/normalizationexerciseanswer.pdf)

Details of patient dental appointments.

| staffNo | dentistName   | patientNo | patientName   | appointment date / time | surgeryNo |
| ------- | ------------- | --------- | ------------- | ----------------------- | --------- |
| S1011   | Tony Smith    | P100      | Gillian White | 12-Aug-03 10:00         | S10       |
| S1011   | Tony Smith    | P105      | Till Bell     | 13-Aug-03 12:00         | S15       |
| S1024   | Helen Pearson | P108      | Tan MacKay    | 12-Sept-03 10:00        | S10       |
| S1024   | Helen Pearson | P108      | Tan MacKay    | 14-Sept-03 10:00        | S10       |
| S1032   | Robin Plevin  | P105      | Till Bell     | 14-0ct-03 16:30         | S15       |
| S1032   | Robm Plevin   | P110      | Toba Walker   | 15-0ct-03 18:00         | S13       |

### Solution

| staffNo | appointment date / time | surgeryNo |
| ------- | ----------------------- | --------- |
| S1011   | 12-Aug-03 10:00         | SI0       |
| S1011   | 13-Aug-03 12:00         | SIS       |
| S1024   | 12-Sept-03 10:00        | S10       |
| S1024   | 14-Sept-03 10:00        | S10       |
| S1032   | 14-0ct-03 16:30         | SI5       |
| S1032   | 15-0ct-03 18:00         | S13       |

| staffNo | dentistName   |
| ------- | ------------- |
| S1011   | Tony Smith    |
| S1024   | Helen Pearson |
| S1032   | Robin Plevin  |
| S1032   | Robm Plevin   |

| patientNo | patientName   |
| --------- | ------------- |
| P100      | Gillian White |
| P105      | Till Bell     |
| P108      | Tan MacKay    |
| P110      | Toba Walker   |

| staffNo | appointment date / time | surgeryNo | patientNo |
| ------- | ----------------------- | --------- | --------- |
| S1011   | 12-Aug-03 10:00         | SI0       | P100      |
| S1011   | 13-Aug-03 12:00         | SIS       | P105      |
| S1024   | 12-Sept-03 10:00        | S10       | P108      |
| S1024   | 14-Sept-03 10:00        | S10       | P108      |
| S1032   | 14-0ct-03 16:30         | SI5       | P105      |
| S1032   | 15-0ct-03 18:00         | S13       | P110      |

## Exercise 5

### Problem

[Source](https://www.javaguicodexample.com/normalizationexerciseanswer.pdf)

Employees of InstantCover and their contracts to work at hotels.

| NIN      | contractNo | hoursPerWeek | eName        | hoteINo | hotelLocation |
| -------- | ---------- | ------------ | ------------ | ------- | ------------- |
| 113567WD | C1024      | 16           | John Smith   | H25     | Edinburgh     |
| 234111XA | C1024      | 24           | Diane Hocine | H25     | Edinburgh     |
| 712670YD | C1025      | 28           | Sarah White  | H4      | Glasgow       |
| 113567WD | C1025      | 16           | John Smith   | H4      | Glasgow       |

### Solution

| NIN      | contractNo | hoursPerWeek |
| -------- | ---------- | ------------ |
| 113567WD | C1024      | 16           |
| 234111XA | C1024      | 24           |
| 712670YD | C1025      | 28           |
| 113567WD | C1025      | 16           |

| NIN      | eName        |
| -------- | ------------ |
| 113567WD | John Smith   |
| 234111XA | Diane Hocine |
| 712670YD | Sarah White  |

| hoteINo | hotelLocation |
| ------- | ------------- |
| H25     | Edinburgh     |
| H4      | Glasgow       |

| contractNo | hoteINo |
| ---------- | ------- |
| C1024      | H25     |
| C1025      | H4      |
