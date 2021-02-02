const spendValue = 150
const popcornPacks = 250
const profitTarget = 350
const necessaryGainToReachTargetValue = spendValue + profitTarget
const necessaryPriceOfPacksToCompleteTheBudget = necessaryGainToReachTargetValue / popcornPacks

const formattedCost = Intl.NumberFormat(
  'pt-BR',
  {
    style: 'currency',
    currency: 'BRL'
  }
).format(necessaryPriceOfPacksToCompleteTheBudget)

const responseMessage = `Para suprir os gastos e arrecadar $350,00, será necessário vender cada pacote por ${formattedCost}.`
alert(responseMessage)
