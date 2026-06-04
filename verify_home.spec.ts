import { test, expect } from '@playwright/test';

test('verify homepage content', async ({ page }) => {
  await page.goto('http://localhost:8000/');

  // Try to close the popup if it exists. Looking at the screenshot, there is a "जय श्री राम!" button.
  // It probably closes the modal.
  try {
    const closeButton = page.locator('button:has-text("जय श्री राम!")');
    if (await closeButton.isVisible({ timeout: 2000 })) {
        await closeButton.click();
        await page.waitForTimeout(1000); // Wait for animation
    }
  } catch (e) {
    console.log("No popup or couldn't close it.");
  }

  // Scroll to where the text was added
  await page.evaluate(() => window.scrollTo(0, 1000));
  await page.waitForTimeout(500);
  await page.screenshot({ path: '/home/jules/verification/verification_homepage3.png', fullPage: true });
});
