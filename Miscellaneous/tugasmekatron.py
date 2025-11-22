import matplotlib.pyplot as plt

# Data dari tabel hasil koreksi
pwm = [0, 10, 20, 40, 80, 120, 160, 200, 220, 255]
arus = [0.0, 1, 1.2, 1.9, 2.8, 3.2, 3, 2.5, 1.9, 1.6]
voltase = [0.0, 0.324, 0.782, 1.563, 3.13, 4.5, 5.9, 7.68, 8.5, 8.69]
rpm = [0, 184.7, 546, 1188, 2484, 3835, 5179, 6639, 7432, 7556]

# Membuat 3 grafik dalam satu figure
plt.figure(figsize=(12, 8))

# PWM vs Arus
plt.subplot(3, 1, 1)
plt.plot(pwm, arus, marker='o', color='b')
plt.title('PWM vs Arus')
plt.xlabel('PWM Motor DC')
plt.ylabel('Arus (A)')
plt.grid(True)

# PWM vs Voltase
plt.subplot(3, 1, 2)
plt.plot(pwm, voltase, marker='s', color='g')
plt.title('PWM vs Voltase')
plt.xlabel('PWM Motor DC')
plt.ylabel('Voltase (V)')
plt.grid(True)

# PWM vs RPM
plt.subplot(3, 1, 3)
plt.plot(pwm, rpm, marker='^', color='r')
plt.title('PWM vs RPM')
plt.xlabel('PWM Motor DC')
plt.ylabel('Kecepatan (RPM)')
plt.grid(True)

plt.tight_layout()
plt.show()
