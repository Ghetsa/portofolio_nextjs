import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
  className?: string;
};

export function BrutalCard({ children, className = "" }: Props) {
  return <div className={`border-[3px] border-[#1b1b1b] bg-white p-5 shadow-[4px_4px_0_0_#1b1b1b] ${className}`}>{children}</div>;
}
