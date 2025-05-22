
preço_café = float(input("Informe o preço do café (R$): "))  # Entrada de preço como número
quantidade_café = int(input("Quantos cafés você deseja comprar?"))
total = preço_café * quantidade_café
print(f"O total da sua compra é: R${total:.2f}")  # Mostrando o valor com 2 casas decimais
